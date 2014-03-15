<?php

include 'cfg/connection.php';
include 'cfg/core.php';

//Inyección de dependencias
/*$pdo = new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS);
$db = new Database($pdo);

$empresa = new Empresa($db);

$empresa->agregarEmpleado("Maximiliano", "Scalzotto", "34", "Programador", null, "PHP");