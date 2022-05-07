
<?php
$host = "127.0.0.1";
$user = 'root';
$password = '';
$database = 'my home';
$connect=mysqli_connect($host, $user,$password,$database);


$name=$_POST['name'];
$email=$_POST['email'];
$Address=$_POST['add'];
$description=$_POST['description'];
$image=$_POST['Image'];
$tele=$_POST['phone'];

session_start();
if($_POST['Image']){
$sql="Update agents set name ='".$name."', email ='".$email."',address ='".$Address."', description='".$description."' , image ='".$image."', Tele='".$tele."' where email='". $_SESSION['email']."' ";
} 
else{
    $sql="Update agents set name ='".$name."', email ='".$email."',address ='".$Address."', description='".$description."' , Tele='".$tele."' where email='". $_SESSION['email']."' ";
    } 
$result=$connect->query($sql);

 if(!$result){
   echo"<script> alert('error') </script>";
 }
 else{ 
    header('location:EditeProfile.php');
    exit();
   
 }
 
 ?>