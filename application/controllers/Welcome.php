<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/Main_Controller.php");

class Welcome extends Main_controller {


	public function index(){
		parent::header();
    //si no esta logueado lo mando al login
    if(!$this->session->userdata('username'))
      redirect('login');

    $data=array('tipo' => $_SESSION["tipo"]);
    //cargo el menu dependiendo del tipo del usuario
    switch($_SESSION["tipo"]){
      case TUTOR :    			{
                              $this -> load -> view('/tutor/panel');
      }break;
      case MAESTRO :     		{
                              $this -> load -> view('/maestro/panel');
      }break;
      case ESTABLECIMIENTO :{
                              $this -> load -> view('/establecimiento/panel');
      }break;
      default:    		 			{
                              $this -> load -> view('panel');
      }break;
    }
		parent::footer();
  }

	public function key()
	{
		echo md5('peliculas');
	}

}
