<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../Main_Controller.php");

class Alumno extends Main_controller {

public function __construct()
{
  parent::__construct();
  $this->load->model('Alumno_model');
}

  public function crear_alumno(){
    if(!$this->session->userdata('username'))
      redirect('login');
    parent::header();
    $this->load->view('alumno/crearalumno');
    parent::footer();
    $this -> default_vars();
  }

  public function show_lista_alumnos(){
    parent::header();
    $this -> load -> view("alumno/listado");
    parent::footer();

    $js_to_load=array();
    array_push($js_to_load,base_url()."/../js/alumno/lista.js");
    array_push($js_to_load,base_url()."static/panel/vendors/datatables.net/js/jquery.dataTables.min.js");
    $css_to_load=array();
    array_push($css_to_load,base_url()."static/panel/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css");
    $this -> default_vars($js_to_load,$css_to_load);
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
