<?php
$host = "127.0.0.1";
$user = 'root';
$password = '';
$database = 'my home';
$connect=mysqli_connect($host, $user,$password,$database);



session_start();
if(isset( $_SESSION['email'])){
    echo"<script>location.href='Home.php'</script>";
session_destroy();

}
    else{
        echo"<script>location.href='Home.php'</script>";
    }




?>