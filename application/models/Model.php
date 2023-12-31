<?php 
    if(session_id() === "") 
        session_start();
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
                $_SESSION['idUser'] = $row['idUser'];
                $_SESSION['pseudo'] = $row['pseudo'];
                $_SESSION['typeUser'] = $row['typeUser'];


                //$this->session->set_userdata('idUser', $row['idUser']);
                // $this->session->set_userdata('pseudo', $row['pseudo']);
                // $this->session->set_userdata('typeUser', $row['typeUser']);
            }
            return $valiny;
        }

        public function inscription($pseudo,$email,$mdp,$genre,$taille,$poids)
        {
            $sql = "INSERT INTO users VALUES(null,?,?,?,?,0)";
            $this->db->query($sql, array($pseudo,$email,$mdp,$genre));
            
            $last_insert_id = $this->db->insert_id();

            $sql = "INSERT INTO info VALUES(null,$last_insert_id,?,?,'now()')";
            $this->db->query($sql, array($taille,$poids));

            // $data = array(
            //     'status' => 'OK',
            //     'data' => $last_insert_id
            // );
            return $last_insert_id;

            //$jsonData = json_encode($data);
            //return $this->output->set_content_type('application/json')->set_output($jsonData);
        }

        public function activiteMampihena()
        {
            $sql = "SELECT * FROM activite where resultat < 0";
            $query = $this->db->query($sql);
            $row = $query->result_array(); 

            return $row;
        }

        public function activiteMampitombo()
        {
            $sql = "SELECT * FROM activite where resultat>0";
            $query = $this->db->query($sql);
            $row = $query->result_array(); 

            return $row;
    }
}
?>