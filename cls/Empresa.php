<?php

namespace Persona

class Empresa extends Disenador {
	
	private $db;
	public $id;
	public $nombre;
	public $empleado;

	public function __construct(){
		$this->db = new Database();
	}

	public function __destruct() {
		$this->db = null;
	}

	private function agregarEmpleadoEmpresa() {
		$empleados = $this->db->query('SELECT empleados FROM empresa');

		if($empleados == 0) {
			$query = 'UPDATE  empresa SET empleados = 1 WHERE id = 1';
			$this->db->query($query);
		}
		else {
			$empleados++;
			$query = 'UPDATE empresa SET empleados = $empleados WHERE id = 1';
		}
	}

	public function agregarEmpleado($nombre, $apellido, $edad, $empleado, $tipo = null, $lenguaje = null) {
		//Si tipo es distinto de null entonces es un diseñador
		if($tipo != null) {
			$query = 'INSERT INTO programador(nombre,apellido,edad,empleado,tipo)
					  VALUES($nombre,$apellido,$edad,$empleado,$tipo)';
		}
		else {
			//Sino, es un programador
			$query = 'INSERT INTO programador(nombre,apellido,edad,empleado,lenguaje)
					  VALUES($nombre,$apellido,$edad,$empleado,$lenguaje)';
		}

		///Sumo un empleado al campo empleados en la tabla empresa
		$this->agregarEmpleadoEmpresa();

		return $this->db_query($query);
	}

	public function obtenerListadoEmpleados() {

	}

	public function obtenerEmpleadoPorId($id) {

	}

	public function obtenerPromedioEdadEmpleados($idEmpleado) {
		
	}
}