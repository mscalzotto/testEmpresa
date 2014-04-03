<?php

class Ajax extends Database {
	
	public function __construct(Database $db){
		$this->db = $db;
	}

	private function getDBValues() {
		$query = "SELECT * FROM  categoria INNER JOIN puesto ON categoria.id_puesto = puesto.id_puesto";
		$dbValues = $this->db->query($query);

		return $dbValues;
	}

	public function getJson() {
		$dbValues = $this->getDBValues();

		$json = array();
		foreach ($dbValues as $key => $dbValue) {
			foreach ($dbValue as $jsonKey => $jsonValue) {
				$json[$dbValue['puesto']]['categoria'][$key] = $dbValue['categoria'];
			}
		}	
		$json = json_encode($json);

		return print $json;
	}

}