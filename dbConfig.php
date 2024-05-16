<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "php_account_ordersystem_db"; // should be the correct database name
	$dsn = "mysql:host={$host};dbname={$dbname}";

	$conn = new PDO($dsn, $user, $password);
	$conn->exec("SET time_zone = '+08:00';");
?>