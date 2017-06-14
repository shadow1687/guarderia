<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class Accion_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function ingresar_accion($data){
		$this->db->insert('accion', array('tipo'=>$data['tipo'],'descripcion'=>$data['descripcion']));

	}


	function obtener_acciones(){
		$query = $this->db->get('accion');
		if ($query->num_rows() >0 ) return $query;



	}

	function obtener_acciones_2(){
<<<<<<< HEAD
		//$qry="SELECT id, tipo FROM accion";
		//return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));
		//$sql= mysql_query($qry);

		$sql = $this->db->get('accion');
		if ($sql->num_rows()>0) return $sql;
=======
		$qry="SELECT * FROM accion;";
		return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));
>>>>>>> 753405c672a663efd9861a1ea632e238ccced5c8
	}

}




?>
