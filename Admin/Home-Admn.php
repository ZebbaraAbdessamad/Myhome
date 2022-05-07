<!DOCTYPE html>
<html>
<head>
   <!-- Bootstrap -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<link href="Modification_Admn.css" Type="text/css"rel="stylesheet">
<link href="glyphicon.css" Type="text/css"rel="stylesheet">
<meta charset="utf-8">
    <title>Admin</title>
</head>
<body>
                           <!-- 1eme Navbar-->
						   <?php    include('Navbar_Admin.php'); ?>
	

                             <!-- 2eme Home-->

							 <?php 
							 if(!isset($_SESSION['Email'])){
							// header('locaton:Page_Login_Admn.php');
							echo"<script>location.href='Page_Login_Admn.php'</script>";
							 } ?>

							
							 <br/>
							 <br/>
							 <br/>


			<div class="container">
                 <div class="row" style=" margin-top:50Px;"> 
                           <div class="row justify-content-center">
					
									<div class=" col-lg-3 col-md-6" >
							<a href="gestion_Property.php">	<p class="item1"> <span  class=" glyphicon glyphicon-th-list" style="color:#723250;font-size:100px;margin-top:-20px;"></span> <br/> 
							Manage Properties</p></a>
									</div>
									
									<div class=" col-lg-3 col-md-6 ">
									<a href="gestion_Agent.php"><p class="item2"> <img src="person.PNG" style="width: 90px; height:90px;   border-radius: 10px;"><br/>
									 Manage Agents</p></a>
								
								</div>
								
								<div class=" col-lg-3 col-md-6 ">
								<a href="Pr_for_Buy.php"><p  class="item3">  <span class=" glyphicon glyphicon-home"  style="color:rgb(72, 61, 83);font-size:100px;margin-top:-20px;"></span><br/>
								 Properties For Buy</p></a>
								</div>
							
								<div class=" col-lg-3 col-md-6  ">
								<a href="Pr_for_Rent.php"><p class="item4"> <span class=" glyphicon glyphicon-shopping-cart" style="color:rgb(151, 100, 10);font-size:100px;margin-top:-20px;"></span><br/>
								 Properties For Rent</p></a>
								</div>
				
                         </div>
                 </div>
		    </div>

			    <!-- Change password-->
				<?php    include('Change_pass_Admn.php'); ?>
			
			<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="footer"style="margin-bottom:-100px;" class="fixed-bottom">
	
<p style="bottom: 0px; background:url('pp.jpg'); width:100%; height:70px;"><span class=" glyphicon glyphicon-bullhorn "  style="color:#999 ">  My home commnty</span>  <img src="Log 3.jpeg"  style="width:70px; height:70px; float:right;"alt=""></p>	
</div>


</div>
</body>
</html>