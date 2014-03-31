<?php

class Empresa {
	
	public $empleado;

	public function __construct(Database $db){
		$this->db = $db;
	}

	public function __destruct() {
		$this->db = null;
	}

	public function agregarEmpleado($table, array $values) {
		$this->db->create($table, $values);
	}

	public function obtenerListadoEmpleados($tablaEmpleados) {
		
	}

	public function obtenerEmpleadoPorId($id) {

	}

	public function obtenerPromedioEdadEmpleados($idEmpleado) {
		
	}
}