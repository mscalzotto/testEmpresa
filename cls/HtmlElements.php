<?php

class HtmlElements {
	
	public static function openForm($id, $action, $method = 'post') {
		return print '<form id="'. $id .'" action="'. $action .'" method="'. $method .'">';
	}

	public static function closeForm() {
		return print '</form>';
	}

	public static function input($class = 'defaultInputClass', $type, $name = null, $placeholder = null, $value = null) {
		!is_null($class)? $class = 'class="'. $class . '"' : null;
		!is_null($placeholder)? $placeholder = 'placeholder="'. $placeholder .'"' : null;
		!is_null($value)? $value = 'value="'. $value .'"' : null;
		!is_null($name)? $name = 'name="'. $name .'"' : null;

		return print '<input type="'. $type .'" '. $name .' '. $placeholder .' '. $value .' '. $class .' />';
	}

	public static function nav(array $navElements) {
		$header  =  '<nav>';
		$header .=    '<ul>';
		                foreach ($navElements as $navName => $navLink) {
		$header .=          '<li class="navElement_' .  $navName . '"><a class="navLink_' . $navName . '"href="' . $navLink . '">' . $navName . '</a></li>';
	                    }
		$header .=    '</ul>';
		$header .=  '</nav>';
		
		return print $header;
	}

	//Hay que mejorar el hecho de que el tipo de select se determine de la forma que se determina actualmente
	public static function select($db, $type, $class = 'defaultSelectClass', $name = 'defaultSelectName') {
		$availableTypes = array('tipo_empleado', 'tipo_disenador', 'tipo_programador');

		if (!in_array($type, $availableTypes)) {
			throw new InvalidArgumentException('Parametro "type" inválido.');
		}
		
		$select  = '<select class="'. $class .'" name="' . $name . '">';
		$select .=	 '<option value="default">-- Seleccione --</option>';
		
		$query = "SELECT ". $type ." FROM " . $type ."";
		
		$selectValues = $db->query($query);

		foreach ($selectValues as $field => $optionValue) {
			$select .=	 '<option value="'. $optionValue[$type] .'">'. $optionValue[$type] .'</option>';
		}

		$select .= '</select>';

		return print $select;
	}
}