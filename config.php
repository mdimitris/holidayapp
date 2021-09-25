<?php

$host = 'localhost';
$db = 'epignosis';
$user = 'root';
$password = '1234';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		session_start();
		
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

