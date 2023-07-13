<?php
	
	// initializing the variables for database connection
	$dsn = 'mysql:host=localhost; dbname=rest_php_api';
	$username = 'root';
	$password = '(Afolabi8120)';

	try{
		$pdo = new PDO($dsn, $username, $password);
	}catch(PDOException $ex){
		echo 'Connection Failed'.$ex->getMessage();
		exit();
	}

	include('../classes/Student.php'); # calling the student class from classes folder

	global $pdo;

	$student = new Student($pdo); # creating an instance of the student class


?>