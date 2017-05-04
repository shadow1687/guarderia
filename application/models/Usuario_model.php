<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends Generic_model {

public $variable;

public function __construct()
{
  parent::__construct();
  $this->load->database();
}


	public function login($username, $password)
	{
		$this->db->where('username', $username);
    $this->db->where('password', $password);
    $q= $this->db->get('usuario');
    if ($q->num_rows()>0)
    {
      return $q -> row();
    }else
    {
      return false;
    }

	}


}
