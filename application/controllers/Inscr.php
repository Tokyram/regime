<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscr extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }
	
    public function index()
	{
		$this->load->view('page/inscr');
	}	

	public function logup()
	{
		$nom = $this->input->post("nom");
		$mail = $this->input->post("email");
		$pass = $this->input->post("mdp");
		$repass = $this->input->post("remdp");

        if($pass != $repass){
            redirect('inscr/index');
        }

		$this->load->model('Model');
		$this->Model->inscription($nom,$mail,$pass);
        redirect('login/index');
	}
}
