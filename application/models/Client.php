<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Client extends CI_Model 
    {
        

        public function listecodevalide(){
            $sql = "SELECT idCode,code, montant FROM code WHERE idCode NOT IN (SELECT idCode FROM HistoCode WHERE statusCode = 1)";
            $query = $this->db->query($sql);
            $row = $query->result_array();
            return $row;
        }

        public function insertcode($idcode,$iduser)
        {
            $sql = "INSERT INTO histoCode VALUES(null,?,?,0)";
            $this->db->query($sql, array($idcode,$iduser));
            $validcode=$this->Client->listecodevalide();
            $arraId = array();
            foreach($validcode as $valid)
            {
                $arraId[] =$valid['idCode'];
            }
            
            if (in_array($idcode, $arraId))
            {
                $last_insert_id = $this->db->insert_id();
                $query = $this->db->where('idHistoCode', $last_insert_id)->get('histoCode');
                
                $last_row = $query->row();

                $data = array(
                    'status' => 'OK',
                    'data' => $last_row,
                );
                $jsonData = json_encode($data);

                return $this->output->set_content_type('application/json')->set_output($jsonData);
            }
            else
            {
                $data = array(
                    'status' => 'Error',
                    'data' => 'Code non valide',
                );
                $jsonData = json_encode($data);

                return $this->output->set_content_type('application/json')->set_output($jsonData);
            }
        }

        public function getidcode($nomcode){
            $sql = "SELECT idCode FROM code WHERE code = ?";
            $query = $this->db->query($sql, array($nomcode));
            $row = $query->row_array();
            return $row;
        }

        public function getinfouser($iduser){
            $sql = "SELECT u.pseudo,u.email,u.genre,i.taille,i.poids FROM users u
            JOIN info i ON u.idUser = i.idUser WHERE u.idUser = ?";
            $query = $this->db->query($sql, array($iduser));
            $row = $query->row_array();

          

            return $row;
        }

        public function suggerer($objectif, $poids)
        {
            $this->load->model('Model');
            $goal = 0;
            $liste = array();
            if($objectif == 0){
                $goal = $poids * (-1);
                $liste = $this->Model->activiteMampihena();
            }else{
                $goal = $poids;
                $liste = $this->Model->activiteMampitombo();
            }

            $listeUnitaire = array();
            $x=0;
            foreach($liste as $l){
                $listeUnitaire[$x] = $l;
                $listeUnitaire[$x]['pU'] = round($l['resultat']/$l['frequence'],2);
                $x++;
            }

            $somme = 0;
            $sugg = array();

            for($i=0; $i<7; $i++){
                $rand = rand(0,(count($liste)-1));
                $sugg[$i] = $listeUnitaire[$rand];
                $somme = $somme + $sugg[$i]['pU'];
            }

            $div = intval($goal/$somme);
            $final = array();
            for($a=0; $a<$div; $a++){
                $final = array_merge($final, $sugg);
            }

            return $final;
        }


        public function gettotal($liste){
            $total = 0;
            foreach($liste as $element){
                $total += $element['montant'];
            }
            return $total;
        }

        public function retiremoney($iduser,$retire){

            $sql = "INSERT INTO histoPocket VALUES(null,?,?,null,'now()')";
            $query = $this->db->query($sql, array($iduser,$retire));
        }

        public function create_regime($iduser,$objectif,$liste)
        {
            $retire = $this->Client->gettotal($liste);
            $montant = $this->Admin->getmonney($iduser);
            
            if($montant > $retire){
                $sql = "INSERT INTO regime VALUES(null,?,now(),?,?)";
                $this->db->query($sql, array($iduser,$retire,$objectif));

                $mess = "OK";
                $last_insert_id = $this->db->insert_id();
                $output = $last_insert_id;

                $i = 0;
                foreach($liste as $element){
                    $sql = "INSERT INTO regimeCompo VALUES(null,?,?)";
                    $this->db->query($sql, array($last_insert_id,$element['idAct']));
                    $i ++;
                }

                $this->Client->retiremoney($iduser,$retire);

            }else{
                $mess = "Error";
                $output = "Insuffisant funds";
            }

            $data = array(
                'status' => $mess,
                'data' => $output,
            );
            $jsonData = json_encode($data);

            return $this->output->set_content_type('application/json')->set_output($jsonData);
        }


    }
?>