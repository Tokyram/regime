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


    
}
?>