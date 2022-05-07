<?php 
    include('Connection_Admin.php'); 

  $Pass1=$_POST['pass1'];
  $Pass2=$_POST['pass2'];

$p="select * from admin where Password='". $_POST['pass1']."' ";
$sel = mysqli_query($connect,$p);
$sum=mysqli_num_rows($sel);

if($sum==1){
    session_start();
$sql="update admin set Password='".$_POST['pass2']."' where Email='". $_SESSION['Email']."' ";
$result= mysqli_query($connect,$sql);
$_SESSION["ch_pass"]='The password has been successfully updated';
header('location:Home-Admn.php');

} 
else{
    session_start();
    $_SESSION["error_pass"]='This password not exist !!'; 
    header('location:Home-Admn.php'); 
}






?>