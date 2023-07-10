<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Admin extends CI_Model 
    {
        
        public function statsgenre(){

            $sql = "SELECT count(*) as female FROM users WHERE genre = 0 AND typeUser != 0";
            $sql2 = "SELECT count(*) as male FROM users WHERE genre = 1 AND typeUser != 0";

            $query = $this->db->query($sql);
            $query2 = $this->db->query($sql2);

            $row = $query->row_array();
            $row2 = $query2->row_array();

            $female = $row['female'];
            $male = $row2['male'];
            $datagen = [$female,$male];

            $data = array(
                'status' => 'OK',
                'data' => $datagen,
            );
            $jsonData = json_encode($data);

            return $this->output->set_content_type('application/json')->set_output($jsonData);
        }


    }
?>