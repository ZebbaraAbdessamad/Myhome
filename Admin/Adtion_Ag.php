
<?php
 include('Connection_Admin.php'); 


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['passwd'];
$address=$_POST['address'];
$description=$_POST['description'];
$image=$_POST['photo'];
$tele=$_POST['phone'];

$sql="insert into agents (name , email , password , address , description , image , tele, status, Date_Ag )
 values ('$name', '$email' , '$password','$address','$description' ,'$image' ,'$tele','0',Now()) ";
 $result=$connect->query($sql);

 if(!$result){
   echo"<script> alert('error') </script>";
 }
 else{
    session_start(); 
    header('location:Add-Ag.php');
    $_SESSION['Add_Ag']='The Agent has been Successfuly added ';
    exit();
   
 }


?>






