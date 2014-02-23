<?php

	include 'cfg/connection.php';
	include 'cfg/core.php';
	
	/** 
	 * Esta es la tan famosa DI en realidad
	 * El crear una instancia de una clase
	 * y pasarsela a otra.
	 * En este caso estas pasando una instancia de PDO a una instancia de EMPRESA
	 */
	$db = new Database(
		new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS
		), true
	);


	$empresa = new Empresa($db);