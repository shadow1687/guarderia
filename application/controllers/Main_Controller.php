<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

//MANEJO DE PERMISOS

//CARGA GENERAL DE SCRIPTS Y STYLES
  public function default_vars($js_array=array(),$css_array=array()){
    $js=array( );
    $css=array( );
    //cargo estilos
    array_push($css,base_url()."css/jquery-ui.min.css");
    array_push($css,base_url()."css/jquery-ui.structure.min.css");
    array_push($css,base_url()."css/jquery-ui.theme.min.css");
    //cargo scripts para dar funcionalidad comun
    array_push($js,base_url()."js/utils.js");
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
