<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Admin extends CI_Model 
    {

        public function listecodevalide(){
            $sql = "SELECT idCode,code FROM code WHERE idCode NOT IN (SELECT idCode FROM HistoCode WHERE statusCode = 1)";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            return $row;
        }

        public function changestatuscode($idcode,$iduser){
            $sql = "UPDATE histoCode SET statusCode = 1 WHERE idCode = ? AND idUser = ?";
            $sql2 = "UPDATE histoCode SET statusCode = 2 WHERE idCode = ? AND idUser != ?";

            $this->db->query($sql, array($idcode,$iduser));
            $this->db->query($sql2, array($idcode,$iduser));
        }

        public function getmonney($iduser){
            $sql = "SELECT sum(montant) as entree FROM histoPocket WHERE idUser = ? AND dateSortie is null";
            $sql2 = "SELECT sum(montant) as sortie FROM histoPocket WHERE idUser = ? AND dateEntree is null";

            $query = $this->db->query($sql, array($iduser));
            $query2 = $this->db->query($sql2, array($iduser));

            $sumentree = $query->row_array();
            $sumsortie = $query2->row_array();

            $sumentree = $sumentree['entree'];
            $sumsortie = $sumsortie['sortie'];

            $reste = $sumentree - $sumsortie;
            return $reste;
            
        }

        public function getcode($idcode)
        {
            $sql = "SELECT * FROM code WHERE idCode = ?";
            $query = $this->db->query($sql, array($idcode));
            $row = $query->row_array();
            return $row;
        }
        
        public function validercode($idcode,$iduser){
            // $sql = "SELECT * FROM (SELECT idCode, code FROM code WHERE idCode NOT IN (SELECT idCode FROM HistoCode WHERE statusCode = 1 )) AS t
            // WHERE idCode = ?";
            // $query = $this->db->query($sql, array($idcode));
            // $row = $query->row_array();

            // if(count($row)>0)
            // {
                $message = "OK";

                $this->load->model('Admin');
                
                $montant = $this->Admin->getcode($idcode);
                $total = $montant['montant'] + $this->Admin->getmonney($iduser);

                $sql = "INSERT INTO histoPocket VALUES(null,?,?,now(),null)";
                $query = $this->db->query($sql, array($iduser,$total));
                
                $last_insert_id = $this->db->insert_id();
                $output = $last_insert_id;

                $this->Admin->changestatuscode($idcode,$iduser);
            // }else{
            //     $message = "Error";
            //     $output = "Code Non Valide";
            // }

            $data = array(
                'status' => $message,
                'data' => $output,
            );
            $jsonData = json_encode($data);

            return $this->output->set_content_type('application/json')->set_output($jsonData);
        }
        public function getnotif(){
            $sql = "SELECT hc.*,c.code,c.montant,u.pseudo FROM histoCode hc JOIN code c ON hc.idCode = c.idCode
            JOIN users u ON hc.idUser = u.idUser WHERE statusCode = 0";
            $query = $this->db->query($sql);
            $result = $query->result_array();

            return $result;

        }

        public function create_activite($idType,$nom,$resultat,$frequence,$montant)
        {
            $sql = "INSERT INTO activite VALUES(null,?,?,?,?,?)";
            $this->db->query($sql, array($idType,$nom,$resultat,$frequence,$montant));
            
            $last_insert_id = $this->db->insert_id();
            $data = array(
                'status' => 'OK',
                'data' => $last_insert_id,
            );
            $jsonData = json_encode($data);
            
            return $this->output->set_content_type('application/json')->set_output($jsonData);
        }

        public function getallactivite(){
            $sql = "SELECT * FROM activite";
            $query = $this->db->query($sql);
            $result = $query->result_array();

            return $result;
        }


    }
?>