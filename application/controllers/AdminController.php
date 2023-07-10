<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller 
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->has_userdata('idUser'))
	// 	{
	// 		redirect('Login/index');  
	// 	}
	// 	$this->load->model('Model');
    // }
    public function index()
	{
		$data['notif'] = $this->Admin->getnotif();
		$this->load->view('page/backoffice', $data);
	}



    
}
?>