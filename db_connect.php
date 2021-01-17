<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'satgas';

try{
	$connection = new PDO("mysql:host=${hostname}; dbname=${database}", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
	echo 'Error: ' . $ex->getMessage();
}
?>