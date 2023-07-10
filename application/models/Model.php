<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {

        public function checkLogin($email,$mdp)
        {
            $sql = "SELECT * FROM users where email= ? AND mdp= ?";
            $query = $this->db->query($sql, array($email, $mdp));
            $row = $query->row_array(); 

            $valiny = false;
            if(count($row)>0)
            {
                $valiny = true;
                $this->session->set_userdata('nom', $row['nom']);
                $this->session->set_userdata('typeUser', $row['typeUser']);
            }
            return $valiny;
        }

        public function inscritpion($nom,$email,$mdp,$genre,$taille,$poids)
        {

            $sql = "INSERT INTO users VALUES(null,?,?,?,?,0)";
            $this->db->query($sql, array($nom,$email,$mdp,$genre));
            
            $last_insert_id = $this->db->insert_id();

            $sql = "INSERT INTO info VALUES(null,$last_insert_id,?,?,'now()')";
            $this->db->query($sql, array($taille,$poids));

            $data = array(
                'status' => 'OK',
                'data' => $last_row,
            );

            $jsonData = json_encode($data);
           return $this->response->setJSON($data);
        }
    }
?>