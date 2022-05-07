<?php
$host = "127.0.0.1";
$user = 'root';
$password = '';
$database = 'my home';
// $connect=mysqli_connect($host, $user,$password,$database);
//$connect= new mysqli($host, $user, $password,$database);

try{

	$connect=new pdo ("mysql:host=$host;dbname=$database;charset=utf8",$user,$password);
}
catch(exception $e){
	echo 'erreur :'.$e->getMessage();
}
?>