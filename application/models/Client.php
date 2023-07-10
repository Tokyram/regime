<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Client extends CI_Model 
    {
        

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

    }
?>