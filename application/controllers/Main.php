<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
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
		$this->load->view('index');
	}

	
	

	public function validercode(){
		$iduser = $this->input->get("idUser");
		$idcode = $this->input->get("idCode");

		$this->load->model('Admin');
		$this->Admin->refus($idcode,$iduser);

	}

	public function getmonney(){
		$iduser = $this->input->post("iduser");
		
		$this->load->model('Admin');
		$this->Admin->getmonney($iduser);
	}

    
}
?>