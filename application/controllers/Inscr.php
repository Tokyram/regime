<?php
if(session_id() === "") 
session_start();
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
		$idUser = $this->Model->inscription($nom,$mail,$pass,$genre,$taille,$poids);
		$_SESSION['idUser'] = $idUser;
		$_SESSION['pseudo'] = $nom;
		$_SESSION['genre'] = $genre;
		$_SESSION['taille'] = $taille;
		$_SESSION['poids'] = $poids;
		$_SESSION['typeUser'] = 1;



		// $this->session->set_userdata('pseudo', $nom);
		// $this->session->set_userdata('genre', $genre);
		// $this->session->set_userdata('taille', $taille);
		// $this->session->set_userdata('poids', $poids);
		// $this->session->set_userdata('typeUser', 1	);
		header("HTTP/1.1 200 OK");
	}
}
