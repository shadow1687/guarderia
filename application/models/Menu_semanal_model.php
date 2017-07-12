<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_semanal_model extends Generic_model {

public $variable;

public function __construct()
{
  parent::__construct();
  $this->load->database();
}


	public function get_menu_semanal($monday, $friday)
	{
    $this->db->where('fecha >=', $monday);
    $this->db->where('fecha <=', $friday);
    $q= $this->db->get('menu');
    if ($q->num_rows() >0 ) return $q->result();

	}


}
