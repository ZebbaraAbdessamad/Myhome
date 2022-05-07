<?php
$email=$_POST['email'];
$password=$_POST['pass'];
$sql="select * from  agents where email='".$email."'and password='".$password."'";
$result=mysqli_query($connect,$sql);
$sum=mysqli_num_rows($result);
echo $sum['Aid'];


?>