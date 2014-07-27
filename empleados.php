<?php

include 'cfg/connection.php';
include 'cfg/core.php';

$pdo = new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS);
$db = new Database($pdo);

$empresa = new Empresa($db);

isset($_POST)? $post = $empresa->formatPostValues($_POST) : null;

$empresa->agregarEmpleado('empleados', $post);
