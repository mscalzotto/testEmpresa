<?php

class HtmlHeader {

	/**
	 * public function htmlHeader()
	 *
	 * @param array $navElements
	 * @return html $header 
	 *
	 * Recibe un array con los elementos necesarios
	 * a mostrar en el header y devuelve codigo html
	 * formateado
	 *
	 */
	public function htmlHeader(array $navElements) {
		
		$header  =  '<nav>';
		$header .=    '<ul>';
		                foreach ($navElements as $navName => $navLink) {
		$header .=          '<li class="navElement_' .  $navName . '"><a class="navLink_' . $navName . '"href="' . $navLink . '">' . $navName . '</a></li>';
	                    }
		$header .=    '</ul>';
		$header .=  '</nav>';
		
		return print $header;
	}
}