<?php
require_once(BASEPATH ."../application/models/Persona_model.php");
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_model extends Persona_model {

public $variable;

public function __construct()
{
  parent::__construct();
  $db=$this->load->database();
}

  public function  get_childs($user_id){
    $qry= "SELECT h.*
           FROM persona p
           JOIN relacion r ON (r.id1=p.id AND st=".REL_PADRE_HIJO.")
           JOIN persona h ON (r.id2=h.id)
           WHERE p.id={$user_id};";
    return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));
  }

}
