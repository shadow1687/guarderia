<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/Main_Controller.php");

class Welcome extends Main_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//si no esta logueado lo mando al login
		if(!$this->session->userdata('username'))
		  redirect('login');

		$this->load->view('headerpanel');
		$data=array('tipo' => $_SESSION["tipo"]);
		//cargo el menu dependiendo del tipo del usuario
		switch($_SESSION["tipo"]){
			case TUTOR :    			{
															$this -> load -> view('/tutor/menu',$data);
															$this -> load -> view('/tutor/panel');
			}break;
			case MAESTRO :     		{
															$this -> load -> view('/maestro/menu');
															$this -> load -> view('/maestro/panel');
			}break;
			case ESTABLECIMIENTO :{
															$this -> load -> view('/establecimiento/menu');
															$this -> load -> view('/establecimiento/panel');
			}break;
			default:    		 			{
															$this -> load -> view('menu');
															$this -> load -> view('panel');
			}break;
		}

		$this->load->view('footer');
	}

	public function key()
	{
		echo md5('peliculas');
	}

}
