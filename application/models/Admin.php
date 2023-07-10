<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Admin extends CI_Model 
    {
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


    }
?>