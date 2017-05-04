<?php
require_once(BASEPATH ."../application/models/Generic_model.php");
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno_model extends Generic_model {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}

	function crearAlumno($data){
		$qry=array();
		$qry[count($qry)]="INSERT INTO persona (apellido,nombre,tipo,dni,email,nacimiento,edad,direccion,ciudad)
										  VALUES({$this -> db -> escape($data['apellido'])},
														 {$this -> db -> escape($data['nombre'])},
														 ".ALUMNO.",
														 {$this -> db -> escape($data['dni'])},
														 {$this -> db -> escape($data['email'])},
														 {$data['nacimiento']},
														 {$data['edad']},
														 {$this -> db -> escape($data['direccion'])},
														 {$this -> db -> escape($data['ciudad'])}
													 );";

		$qry[count($qry)]="SET @id=SELECT last_insert_id();";
		//genero el alumno vacio
		$qry[count($qry)]="INSERT INTO alumno (@id,0,0,0,sysdate());";

		return $this -> qry_exec($qry,$this -> db,"simple",array("manage_exception" => TRUE));
	}


	function obtenerAlumnos(){
		$qry="SELECT * FROM alumno JOIN persona ON(id_persona=id) WHERE alumno.st=0;";
		return $this -> qry_exec($qry,$this -> db,"array",array("manage_exception" => TRUE));
	}


}




?>
