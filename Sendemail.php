<?php

if(isset($_POST['send']))
{
    $email=$_POST['email'];
    $message=$_POST['Message'];


	if($email=='' || $message==''){
        echo"<script> alert(' c'est ele vous plait Enter votre message et votre email')</script>";
    }
    else{
$from="My Home communty";
$to="zebbaraabdessamad@gmail.com";
$webmaster="samadzebbara@gmail.com";

$message="<html> <body>";
$message="<p>Email:".$_POST['email']. "</p>";
$message="<p> Message:".$_POST['Message']."</p>";

$message="</html> </body>";

    }
    header('location:Home.php');
	
}




?>