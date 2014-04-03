<?php

include_once 'cfg/connection.php';
include_once 'cfg/core.php';

$pdo = new PDO('mysql:dbname='. DB_DBNAME .';host='. DB_HOST, DB_USER, DB_PASS);
$db = new Database($pdo);

$ajax = new Ajax($db);
$json = $ajax->getJson();
