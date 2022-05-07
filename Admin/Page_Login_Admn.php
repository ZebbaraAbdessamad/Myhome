<!DOCTYPE html>
<html>
<head>
   <!-- Bootstrap -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<link href="Mdff.css" Type="text/css"rel="stylesheet">
<link href="glyphicon.css" Type="text/css"rel="stylesheet">
<meta charset="utf-8">
    <title>Admin</title>
</head>
<body>
<?php session_start();?>
<div class="Admin">
<div class="container items">
<div class="row justify-content-center">
     <div class=" col-lg-3 col-md-6 col-sx-6">
              <div class="card shadow" style="width: 25rem; height:32rem;   border-radius: 10px; ">
      <div class="card-body text-center"  >
      <img src="/Logement/dk.jpg"  style="height:100px;width:100px;">
		           <h2 class="card-title" style="color:dark;  font-weight: bold; ">  Login</h2>
                
               
               

                  <?php 
                     if(isset($_SESSION["msg"]) ){?>
                                <h6 class="text-danger" style="font-size:20px; margin-bottom:20px;"> <?php echo $_SESSION["msg"];  ?></h6>
                                <?php  unset($_SESSION['msg']); }  ?>

              <form method="post" action="login_Admn.php" role="form">
                                 <br/>
            <label style="color:#999; font-size:20px; float:left;">Email:</label>
                                <br/>
           <input type="text" class="form-control"   required  placeholder="Enter Email" name="Email">
          
           <label style="color:#999; font-size:20px; float:left;">Password:</label>             
           <br/>
           <input type="password"    required  class="form-control" placeholder="Password" name="pass" >
                           <br/>
           
      </div>

          <div class="card-footer text-center">
        <button type="submit"  name="logAdm" class="btn btn-primary" style=" width: 30%; ">Login</button>
          </div>
                 </form>
    </div>
   </div>
</div>
</div>

</div>

<style>
body{

	padding: 0;
	margin: 0;
	font-family:sans-serif; 
   background-image:url("img-Ad.jpg");
	background-position:center;
	background-size: cover;
  background-image: fixed;
}

.Admin{
   position: center;
   justify-content: center;
   margin-top:190px;
   margin-left: -100px;
}

.btn-primary:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}

input{
   width: 40px;
   height: 40px;
  margin-bottom:16px;
  border-radius: 700px;
  box-shadow: antiquewhite;

}

</style>











</body>
</html>