<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller 
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


	public function codepage()
	{
		$this->load->view('page/code');

	}

	public function accueil()
	{
		$this->load->view('page/accueil');

	}

	public function code(){
		$iduser = $this->input->post("iduser");
		$nomcode = $this->input->post("nomcode");
		$idcode = $this->Client->getidcode($nomcode);
		$this->Client->insertcode($idcode['idCode'],$iduser);
	}


    
}
?>