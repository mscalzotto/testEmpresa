<?php

//namespace Persona;

class Empleado {

	public $id;
	public $edad;
	public $nombre;
	public $apellido;
	public $puesto;

	public function __construct($id, $edad, $nombre, $apellido, $puesto) {
		$this->id = $id;
		$this->edad = $edad;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->puesto = $puesto;
	}
}