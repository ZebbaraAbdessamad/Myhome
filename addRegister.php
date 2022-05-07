
<?php
$host = "127.0.0.1";
$user = 'root';
$password = '';
$database = 'my home';
$connect=mysqli_connect($host, $user,$password,$database);


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['passwd'];
$address=$_POST['address'];
$description=$_POST['description'];
$image=$_POST['photo'];
$tele=$_POST['phone'];
$Date=$_POST['date'];;


$sql="insert into agents (name , email , password , address , description , image , tele, status ,Date_Ag )
 values ('$name', '$email' , '$password','$address','$description' ,'$image' ,'$tele','0','$Date') ";
 $result=$connect->query($sql);

 if(!$result){
   echo"<script> alert('error') </script>";
 }
 else{
   session_start();
    $_SESSION['Register_Ag']='The Register has been successfully';
    header('location:Register.php');
    exit();
   
 }


?>






