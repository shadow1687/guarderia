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
                              $this -> default_vars(array(base_url()."static/panel/vendors/datatables.net/js/jquery.dataTables.min.js",base_url()."/../js/tutor/panel.js"),
                              array(base_url()."static/panel/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"));
      }break;
      case MAESTRO :     		{
                              $this -> load -> view('/maestro/menu');
                              $this -> default_vars();
      }break;
      case ESTABLECIMIENTO :{
                              $this -> load -> view('/establecimiento/menu');
                              $this -> default_vars();
      }break;
      default:    		 			{
                              $this -> load -> view('menu');
                              $this -> default_vars();
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
    array_push($css,base_url()."static/panel/vendors/bootstrap/dist/css/bootstrap.min.css");
    array_push($css,"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");
    // array_push($css,base_url()."static/panel/vendors/nprogress/nprogress.css");
    // array_push($css,base_url()."static/panel/vendors/iCheck/skins/flat/green.css");
    // array_push($css,base_url()."static/panel/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css");
    // array_push($css,base_url()."static/panel/vendors/jqvmap/dist/jqvmap.min.css");
    // array_push($css,base_url()."static/panel/vendors/bootstrap-daterangepicker/daterangepicker.css");
    array_push($css,base_url()."static/panel/build/css/custom.min.css");

    array_push($css,base_url()."css/jquery-ui.min.css");
    array_push($css,base_url()."css/jquery-ui.structure.min.css");
    array_push($css,base_url()."css/jquery-ui.theme.min.css");
    array_push($css,base_url()."css/main.css");

    //cargo scripts para dar funcionalidad comun
    //CAMBIAR ESTO PARA QUE SEA A DEMANDA Y NO SE CARGUE TODO
    array_push($js,base_url()."static/panel/vendors/jquery/dist/jquery.min.js");
    array_push($js,base_url()."static/panel/vendors/bootstrap/dist/js/bootstrap.min.js");
    // array_push($js,base_url()."static/panel/vendors/fastclick/lib/fastclick.js");
    // array_push($js,base_url()."static/panel/vendors/nprogress/nprogress.js");
    // array_push($js,base_url()."static/panel/vendors/Chart.js/dist/Chart.min.js");
    // array_push($js,base_url()."static/panel/vendors/gauge.js/dist/gauge.min.jss");
    // array_push($js,base_url()."static/panel/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js");
    // array_push($js,base_url()."static/panel/vendors/iCheck/icheck.min.js");
    // array_push($js,base_url()."static/panel/vendors/skycons/skycons.js");
    // array_push($js,base_url()."static/panel/vendors/Flot/jquery.flot.js");
    // array_push($js,base_url()."static/panel/vendors/Flot/jquery.flot.pie.js");
    // array_push($js,base_url()."static/panel/vendors/Flot/jquery.flot.time.js");
    // array_push($js,base_url()."static/panel/vendors/Flot/jquery.flot.stack.js");
    // array_push($js,base_url()."static/panel/vendors/Flot/jquery.flot.resize.js");

    // array_push($js,base_url()."static/panel/vendors/flot.orderbars/js/jquery.flot.orderBars.js");
    // array_push($js,base_url()."static/panel/vendors/flot-spline/js/jquery.flot.spline.min.js");
    // array_push($js,base_url()."static/panel/vendors/flot.curvedlines/curvedLines.js");
    // array_push($js,base_url()."static/panel/vendors/DateJS/build/date.js");
    // array_push($js,base_url()."static/panel/vendors/jqvmap/dist/jquery.vmap.js");
    // array_push($js,base_url()."static/panel/vendors/jqvmap/dist/maps/jquery.vmap.world.js");
    // array_push($js,base_url()."static/panel/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js");

    array_push($js,base_url()."static/panel/vendors/bootstrap-daterangepicker/daterangepicker.js");

    array_push($js,base_url()."static/panel/build/js/custom.min.js");

    array_push($js,base_url()."js/utils/jquery-ui.min.js");
    array_push($js,base_url()."js/utils.js");
    array_push($js,base_url()."js/main.js");
    array_push($js,base_url()."js/utils/jquery.mask.min.js");
    array_push($js,base_url()."js/utils/moment.min.js");
    $this -> load_variables(array_merge($js,$js_array),array_merge($css,$css_array));
  }

  public function load_variables($js=array(),$css=array()){
    $data=array();
    $data["js_to_load"]=array_unique($js);
    $data["css_to_load"]=array_unique($css);
    if($this->load->view('init','',TRUE)!== '')
      $this -> load -> view('init',$data);
  }
}
