
<?php
   include('connectionBD.php');


session_start();
if(isset($_POST['email'])){

$email=$_POST['email'];
$password=$_POST['pass'];
$sql="select * from  agents where email='".$email."'and password='".$password."' and status='1'";
$result=$connect->query($sql);
$sum=$result->rowcount();

if($sum==1){
   foreach($result as $r){
  $_SESSION['email']=$email;
  $_SESSION['Aid']=$r['Aid'];
  header('location:Profile.php');

  exit();
   }
}
else{				
 $_SESSION["msg"]='password or email incorrect';  
  echo"<script>location.href='Home.php'</script>"; 
  exit();
 
     //header('location:Home.php');
  //$_GET
//header("location:Home.php?msg=password or email incorrect");


}
}

?>




<!--<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Invalid email or password						</div>-->