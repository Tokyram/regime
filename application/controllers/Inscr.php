<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscr extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }
	
    public function index()
	{
		$this->load->view('page/inscription');
	}	

	public function logup()
	{
		$nom = $this->input->post("nom");
		$mail = $this->input->post("email");
		$pass = $this->input->post("mdp");
		$repass = $this->input->post("remdp");

		$genre = $this->input->post("genre");
		$taille = $this->input->post("taille");
		$poids = $this->input->post("poids");

        // if($pass != $repass){
        //     redirect('inscr/index');
        // }

		$this->load->model('Model');
		$this->Model->inscritpion($nom,$mail,$pass,$genre,$taille,$poids);
	}
}
