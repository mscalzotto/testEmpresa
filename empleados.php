<?php

include 'cfg/connection.php';
include 'cfg/core.php';

if (isset($_POST)) {
	foreach ($_POST as $postKey => $postValue) {
		if (!($postValue == '' || $postValue == 'default')) {
			$post[$postKey] = $postValue;
		}
	}
}

$pdo = new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS);
$db = new Database($pdo);

$empresa = new Empresa($db);

$empresa->agregarEmpleado('empleados', $post);
