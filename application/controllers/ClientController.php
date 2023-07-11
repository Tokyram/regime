<?php
    if(session_id() === "") 
	session_start();

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
		$iduser = $_SESSION['idUser'];
		$info = $this->Client->getinfouser($iduser);
		$data['info'] = $info;
		$data['money'] = $this->Admin->getmonney($iduser);
		$data['codes'] = $this->Client->listecodevalide();
		$this->load->view('page/accueil', $data);

	}

	public function code(){
		$iduser = $_SESSION["idUser"];
		$nomcode = $this->input->post("nomcode");
		$idcode = $this->Client->getidcode($nomcode);
		$this->Client->insertcode($idcode['idCode'],$iduser);
	}

	
	public function infoUser(){
		$this->load->model('Client');
		$this->Client->getinfouser(2);
	}

	public function suggestion(){
		$this->load->model('Client');
		$objectif = $this->input->get("objectif");
		$poids = $this->input->get("poids");
		$data['suggestion'] = $this->Client->suggerer($objectif, $poids);
		$this->load->view('page/listeSuggestion', $data);
	}

	public function listeSugg(){
		$this->load->view('page/listeSuggestion');
	}

	public function logout(){
		//$this->session->sess_destroy();
		session_destroy();
		redirect(base_url());
	}

	public function validregime()
	{
		// Retrieve the JSON data sent via POST
        $jsonData = $this->input->raw_input_stream;

        // Convert the JSON data to an associative array
        $data = json_decode($jsonData, true);

        // Access the array data
        // echo json_encode($data);

		// var_dump($data);

		// echo $data[0]['montant'];

		$indice = count($data)-1;
		$objectif = $data[$indice];
		// echo "objectif".$objectif;
		// echo '<br>';

		$rowToRemove = array(0);

		// Find the index of the row to remove
		$index = array_search($rowToRemove, $data);
		
		// If the row is found, remove it
		if ($index !== false) {
			unset($data[$index]);
		}

		$iduser = $_SESSION['idUser'];

		$this->load->model('Client');
		$this->Client->create_regime($iduser,$objectif,$data);

	}


    
}
?>