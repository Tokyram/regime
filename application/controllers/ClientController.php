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
		$iduser = $this->session->userdata('idUser');
		$info = $this->Client->getinfouser($iduser);
		$data['info'] = $info;
		$data['money'] = $this->Admin->getmonney($iduser);
		$data['codes'] = $this->Client->listecodevalide();
		$this->load->view('page/accueil', $data);

	}

	public function code(){
		$iduser = $this->input->post("iduser");
		$nomcode = $this->input->post("nomcode");
		$idcode = $this->Client->getidcode($nomcode);
		$this->Client->insertcode($idcode['idCode'],$iduser);
	}

	
	public function infoUser(){
		$this->load->model('Client');
		$this->Client->getinfouser(2);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function validRegime(){
		$objectif = 0;
		$liste = [];

		$this->load->model('Client');
		$this->Client->create_function(userdata('idUser'),$objectif,$liste);
	}
    
}
?>