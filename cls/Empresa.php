<?php

class Empresa {
	
	public $empleado;

	public function __construct(Database $db){
		$this->db = $db;
	}

	public function __destruct() {
		$this->db = null;
	}

	public function agregarEmpleado($array) {
		
		var_dump($post);

		//return $this->db->query($query);
	}

	public function obtenerListadoEmpleados() {

	}

	public function obtenerEmpleadoPorId($id) {

	}

	public function obtenerPromedioEdadEmpleados($idEmpleado) {
		
	}
}