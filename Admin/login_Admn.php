
<?php
   include('Connection_Admin.php');


session_start();
if(isset($_POST['Email'])){

$email=$_POST['Email'];
 $password=$_POST['pass'];
$sql="select * from  admin where Email='".$email."'and Password='".$password."'";
$result=mysqli_query($connect,$sql);
 $sum=mysqli_num_rows($result);

if($sum==1){

    foreach($result as $r){
      $_SESSION['Email']=$email;
      $_SESSION['Aid']=$r['id'];
      header('location:Home-Admn.php');
    
      exit();}
//   echo"<script>location.href='Home-Admn.php'</script>";
//   exit();
}
else{					
 $_SESSION["msg"]='password or email incorrect';  
  echo"<script>location.href='page_Login_Admn.php'</script>"; 
  exit();
 
     //header('location:Home.php');
//header("location:Home.php?msg=password or email incorrect");


}
}

?>



