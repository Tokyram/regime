<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('idUser'))
		{
			redirect('login/index');  
		}
		$this->load->model('Model');
    }

    
}
?>