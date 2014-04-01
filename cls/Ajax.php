<?php

class Ajax extends Database {
	
	public function __construct(Database $db){
		$this->db = $db;
	}

	public function getDBValues() {
		$query = "SELECT * FROM  categoria INNER JOIN puesto ON categoria.id_puesto =  puesto.id_puesto";
		$dbValues = $this->db->query($query);

		foreach($dbValues as $dbValue) {
			print_r($dbValue) . print '<br>';
		}
	}

}