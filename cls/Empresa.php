<?php

class Empresa {
	
	public $empleado;

	public function __construct(Database $db){
		$this->db = $db;
	}

	public function __destruct() {
		$this->db = null;
	}

	public function agregarEmpleado($table, $values) {
		if ($values == null) {
			throw new InvalidArgumentException('No hay valores para insertar en la base de datos.');
		}

		$this->db->create($table, $values);
	}

	public function obtenerListadoEmpleados($tablaEmpleados) {
		
	}

	public function obtenerEmpleadoPorId($id) {

	}

	public function obtenerPromedioEdadEmpleados($idEmpleado) {
		
	}

	public function formatPostValues($postData) {
		$post = null;
		foreach ($postData as $postKey => $postValue) {
			if (!($postValue == '' || $postValue == 'default')) {
				$post[$postKey] = $postValue;
			}
		}
		return $post;
	}
}