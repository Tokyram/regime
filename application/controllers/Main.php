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

	public function code(){
		$iduser = $this->input->post("iduser");
		$nomcode = $this->input->post("nomcode");

		$this->load->model('Admin');
		$idcode = $this->Admin->getidcode($nomcode);

		$this->Admin->insertcode($idcode['idCode'],$iduser);
	}

	public function validercode(){
		$iduser = $this->input->post("iduser");
		$idcode = $this->input->post("idcode");

		$this->load->model('Admin');
		$this->Admin->validercode($idcode,$iduser);
	}

    
}
?>