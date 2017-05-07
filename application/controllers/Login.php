<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/Main_Controller.php"); 

class Login extends Main_Controller {

public function __construct()
{
  parent::__construct();
}


	public function index()
	{
    //si se va al login mantiene la sesion abierta
    if($this->session->userdata('username'))
    {
      redirect('welcome');
    }

    if (isset($_POST['password'])){
    $this->load->model('Usuario_model');
    $user=$this->Usuario_model->login($_POST['username'], md5($_POST['password']));
    if($user){
      $this->session->set_userdata('username', $_POST['username']);
      $this->load->model('Persona_model');
      $persona=$this -> Persona_model -> get_persona(array("id" => ($user -> persona)));
      $_SESSION["tipo"]=$persona["result"][0]["tipo"];
      redirect('welcome');
    }
    else{
      redirect('login');
    }
  }
		$this->load->view('login');

	}

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }


}
