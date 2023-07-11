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

    }
?>