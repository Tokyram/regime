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

        public function inscritpion($nom,$email,$mdp)
        {
            $sql = "INSERT INTO users VALUES('u'||nextval('seqUser'),?,?,?,0)";
            $this->db->query($sql, array($nom,$email,$mdp));
        }

    }
?>