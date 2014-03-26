<?php

class Empresa extends Disenador {
	
	public $empleado;

	public function __construct(Database $db){
		$this->db = $db;
	}

	public function __destruct() {
		$this->db = null;
	}

	private function agregarEmpleadoEmpresa() {
		$empleados = $this->db->query('SELECT empleados FROM empresa');
		$empleados = $empleados[0]['empleados'];
		$empleados++;
		$query = 'UPDATE empresa SET empleados = '. $empleados .' WHERE id = 1';
		$this->db->query($query);
	}

	public function agregarEmpleado($nombre, $apellido, $edad, $empleado, $tipo = null, $lenguaje = null) {
		
		

		return $this->db->query($query);
	}

	public function obtenerListadoEmpleados() {

	}

	public function obtenerEmpleadoPorId($id) {

	}

	public function obtenerPromedioEdadEmpleados($idEmpleado) {
		
	}
}