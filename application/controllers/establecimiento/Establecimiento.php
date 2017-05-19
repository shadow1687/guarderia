<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../Main_Controller.php");

class Establecimiento extends Main_controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Establecimiento_model');
}


	public function index()
	{
    if(!$this->session->userdata('username'))
      redirect('login');
    parent::header();
    $this->load->view('establecimiento/crearestablecimiento');
    parent::footer();
	}

  public function asignar_alumnos(){
    if(!$this->session->userdata('username'))
      redirect('login');
    parent::header();
    $this->load->view('establecimiento/relate');
    parent::footer();
    $js_to_load=array();
    array_push($js_to_load,base_url()."/../js/establecimiento/relate.js");
    array_push($js_to_load,base_url()."static/panel/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js");
    array_push($js_to_load,base_url()."static/panel/vendors/datatables.net/js/jquery.dataTables.min.js");
    $this -> default_vars($js_to_load);
  }

  public function contacto()
  {
    if(!$this->session->userdata('username'))
      redirect('login');
    parent::header();
    $this->load->view('contacto');
    parent::footer();
  }




}
