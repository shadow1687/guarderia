<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {


  public function index(){
    //si no esta logueado lo mando al login
    if(!$this->session->userdata('username'))
      redirect('login');

    $this -> header();
    $this -> footer();
  }

  protected function header(){
    $this->load->view('headerpanel');
    $data=array('tipo' => $_SESSION["tipo"]);
    //cargo el menu dependiendo del tipo del usuario
    switch($_SESSION["tipo"]){
      case TUTOR :    			{
                              $this -> load -> view('/tutor/menu',$data);
      }break;
      case MAESTRO :     		{
                              $this -> load -> view('/maestro/menu');
      }break;
      case ESTABLECIMIENTO :{
                              $this -> load -> view('/establecimiento/menu');
      }break;
      default:    		 			{
                              $this -> load -> view('menu');
      }break;
    }
  }

  protected function footer(){
    $this->load->view('footer');
  }

//MANEJO DE PERMISOS


//CARGA GENERAL DE SCRIPTS Y STYLES
  public function default_vars($js_array=array(),$css_array=array()){
    $js=array( );
    $css=array( );
    //cargo estilos
    array_push($css,base_url()."css/jquery-ui.min.css");
    array_push($css,base_url()."css/jquery-ui.structure.min.css");
    array_push($css,base_url()."css/jquery-ui.theme.min.css");
    array_push($css,base_url()."css/main.css");
    //cargo scripts para dar funcionalidad comun
    array_push($js,base_url()."js/utils.js");
    array_push($js,base_url()."js/main.js");
    array_push($js,base_url()."js/utils/jquery.mask.min.js");
    array_push($js,base_url()."js/utils/jquery-ui.min.js");
    array_push($js,base_url()."js/utils/moment.min.js");
    $this -> load_variables(array_merge($js_array,$js),array_merge($css,$css_array));
  }

  public function load_variables($js=array(),$css=array()){
    $data=array();
    $data["js_to_load"]=$js;
    $data["css_to_load"]=$css;
    $this -> load -> view('init',$data);
  }
}
