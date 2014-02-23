<?php

//namespace Persona;

class Persona {

	public $id;
	public $edad;
	public $nombre;
	public $apellido;

	public function __construct($id, $edad, $nombre, $apellido) {
		$this->id = $id;
		$this->edad = $edad;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}
}