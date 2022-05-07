<?php 
  include('connectionBD.php');

  $Pass1=$_POST['pass1'];
  $Pass2=$_POST['pass2'];

$p="select * from agents where password='". $_POST['pass1']."' ";
$sel =$connect->query($p);
$sum=$sel->rowcount();

if($sum==1){
    session_start();
$sql="update agents set password='".$_POST['pass2']."' where email='". $_SESSION['email']."' ";
$result=$connect->query($sql);
$_SESSION["ch_pass"]='The password has been successfully updated';
header('location:Profile.php');

} 
else{
    session_start();
    $_SESSION["error_pass"]='This password not exist !!'; 
    header('location:Profile.php'); 
}






?>