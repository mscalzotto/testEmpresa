<?php

include 'cfg/connection.php';
include 'cfg/core.php';

var_dump($_REQUEST);

foreach ($_POST as $postKey => $postValue) {
	if (!($postValue == '' || $postValue == 'default')) {
		$post[$postKey] = $postValue;
	}
}

var_dump($post);


/*
$pdo = new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS);
$db = new Database($pdo);

$empresa = new Empresa($db);

$empresa->agregarEmpleado("Maximiliano", "Scalzotto", "34", "Programador", null, "PHP");*/
