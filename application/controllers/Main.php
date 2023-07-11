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

	
	public function addactivite()
	{
		$idtype = $this->input->post("idtype");
		$nom = $this->input->post("nom");
		$resultat = $this->input->post("resultat");
		$frequence = $this->input->post("frequence");
		$montant = $this->input->post("montant");

		$this->load->model('Admin');
		$this->Admin->create_activite($idtype,$nom,$resultat,$frequence,$montant);
	}

	public function validercode(){
		$iduser = $this->input->get("idUser");
		$idcode = $this->input->get("idCode");

		$this->load->model('Admin');
		$this->Admin->validercode($idcode,$iduser);
	}

	public function getmonney(){
		$iduser = $this->input->post("iduser");
		
		$this->load->model('Admin');
		$this->Admin->getmonney($iduser);
	}

    
}
?>