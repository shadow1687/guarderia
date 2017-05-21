<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Establecimiento_model extends Generic_model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	public function crearEstablecimiento($data){
    $this->db->insert('establecimiento', array('nombre'=>$data['nombre'], 'direccion'=>$data['direccion'], 'email'=>$data['email'],
    'telefono'=>$data['telefono'], 'ciudad'=>$data['ciudad']));
	}


	public function obtenerEstablecimientos(){
		$query = $this->db->get('establecimiento');
		if ($query->num_rows() >0 ) return $query;
	}

	public function get_aulas($maestro){
		if($maestro){
			$qry="SELECT a.id,
									 IF(am.st=0,'MAÑANA','TARDE') turno,
			 						 a.nombre,
									 (a.capacidad - (SELECT count(*) FROM alumno WHERE id_aula=a.id AND id_maestro=am.id_maestro)) capacidad
						FROM aula a
						LEFT JOIN aula_maestro am ON (a.id=am.id_aula)
						WHERE am.id_maestro=(SELECT id FROM persona WHERE tipo=".MAESTRO." AND dni={$maestro});";
		}
		else{
			$qry="SELECT a.*
						FROM aula a;";
		}
		return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));
	}

	public function asignar_alumnos($alumnos,$maestro,$aulas){
var_dump($alumnos,$maestro,$aula);exit;
	}


}




?>
