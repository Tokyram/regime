<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Admin extends CI_Model 
    {
        public function getnotif(){
            $sql = "SELECT hc.*,c.code,c.montant,u.pseudo FROM histoCode hc JOIN code c ON hc.idCode = c.idCode
            JOIN users u ON hc.idUser = u.idUser WHERE statusCode = 0";
            $query = $this->db->query($sql);
            $result = $query->result_array();

            return $result;

            // $data = array(
            //     'status' => 'OK',
            //     'data' => $result,
            // );
            // $jsonData = json_encode($data);

            //return $this->output->set_content_type('application/json')->set_output($jsonData);
        }

    }
?>