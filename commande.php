<?php 


include('connectionBD.php');

$name=$_POST['name'];
$email=$_POST['email'];

$tele=$_POST['number'];
$message=$_POST['mesg'];

$Lid=$_POST['id_lg'];
$date=$_POST['date'];
$add=$_POST['adresse'];

if(isset($_POST['Submit'])){

    $sql="insert into Commandes (name_client , email_client, message ,tele_client ,Date_demand,Lid,address_cl )
    values ('$name', '$email','$message','$tele' ,'$date' ,'$Lid','$add') ";
    $result=$connect->query($sql);
   
   

    
    if(!$result){
       echo"<script> alert('error') </script>";
     }
     else{ 
        header('location:Home.php');
        session_start();
        $_SESSION['commande']='This demand  has been successfully sened';
        exit();
       
     }

    }


?>