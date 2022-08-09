<?php
	// $conn = mysqli_connect('localhost','Tali','test1234','classroom_data');

	// if(!$conn){
	// 	echo 'Connection error: ' . mysql_connect_error();
	// }

	try{
		$dsn = "mysql:host=localhost;dbname=classroom_data";
		$conn = new PDO($dsn,'Tali','test1234');
	}catch(Exception $e){
		echo 'Error connecting to server';
	}

?>