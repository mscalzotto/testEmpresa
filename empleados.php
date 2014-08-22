<?php

include 'cfg/connection.php';
include 'cfg/core.php';

$pdo = new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS);
$db = new Database($pdo);

$empresa = new Empresa($db);

$post = isset($_POST)? $empresa->formatPostValues($_POST) : null;

if (!is_null($post)) {
	$empresa->agregarEmpleado('empleados', $post);
}
