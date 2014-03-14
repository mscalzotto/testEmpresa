<?php

//namespace Persona;

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
		//Si tipo es distinto de null entonces es un diseñador
		if($tipo != null) {
			$query = 'INSERT INTO disenador(nombre,apellido,edad,tipo)
					  VALUES("'. $nombre .'","'. $apellido .'",'. $edad.',"'. $tipo .'")';
		}
		else {
			//Sino, es un programador
			$query = 'INSERT INTO programador(nombre,apellido,edad,lenguaje)
					  VALUES("'. $nombre .'","'. $apellido .'",'. $edad.',"'. $lenguaje .'")';
		}

		//Sumo un empleado al campo empleados en la tabla empresa
		$this->agregarEmpleadoEmpresa();

		return $this->db->query($query);
	}

	public function obtenerListadoEmpleados() {

	}

	public function obtenerEmpleadoPorId($id) {

	}

	public function obtenerPromedioEdadEmpleados($idEmpleado) {
		
	}
}