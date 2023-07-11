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
		$data['activites']=$this->Admin->getallactivite();
		$this->load->view('page/backoffice', $data);
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



    
}
?>