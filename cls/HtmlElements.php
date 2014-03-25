<?php

require('Database.php');

class HtmlElements {

	public function __construct(Database $db = null){
		if($db != null) {
			$this->db = $db;
		}
	}

	public function __destruct() {
		$this->db = null;
	}

	/**
	 * public function renderNav()
	 *
	 * @param array $navElements
	 * @return html $header 
	 *
	 * Recibe un array con los elementos necesarios
	 * a mostrar en el header y devuelve codigo html
	 * formateado
	 *
	 */
	public static function renderNav(array $navElements) {
		
		$header  =  '<nav>';
		$header .=    '<ul>';
		                foreach ($navElements as $navName => $navLink) {
		$header .=          '<li class="navElement_' .  $navName . '"><a class="navLink_' . $navName . '"href="' . $navLink . '">' . $navName . '</a></li>';
	                    }
		$header .=    '</ul>';
		$header .=  '</nav>';
		
		return print $header;
	}

	public static function renderAreaDesempeno($db, $class = 'defaultSelectClass', $name = 'defaultSelectName') {
		$select  = '<select class="'. $class .'" name="' . $name . '">';
		$select .=	 '<option value="default">-- Seleccione --</option>';
		
		$query = "SELECT tipo_empleado FROM tipo_empleado";

		$selectValues = $db->query($query);

		

		//return $select;
	}
}