<?php

$host = 'db'; // service name from docker-compose file
$user = 'devuser';
$password = 'devpass';
$dbname = 'test_db';

$dsn = "mysql:host=$host;dbname=$dbname";
$options = [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
$pdo = new \PDO($dsn, $user, $password, $options);


echo 'Hello, world!<br>';
require '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
$controller = new \App\Controllers\BaseController;
$controller->index("Привет, мир!");
