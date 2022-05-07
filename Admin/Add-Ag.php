
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
                            <!--1 Navbar -->
                            <?php    include('Navbar_Admin.php'); ?>

                    <!-- 2 Add Agent -->
                    <br/><br/><br/><br/><br/>
                        



                     <!-- Logout -->
                     <?php 
							 if(!isset($_SESSION['Email'])){
							echo"<script>location.href='Page_Login_Admn.php'</script>";
							 } ?>





                        <div class="container" >	


                        <div style="background-color:rgb(32, 203, 235); color:white; margin-bottom:25px; width:240px; height:60px; border-radius:10px; padding:10px;">
						<h3><i class=" glyphicon glyphicon-plus-sign"></i>Add Agents</h3>
						</div>
            
                                 
<div class="spacer" >	

<div class="row register" style="text-align: position;">	
  <div class="col-lg-8 col-lg-offset-3 col-sm-8 col-sm-offset-3 col-xs-12 ">

  <?php
 if(isset($_SESSION['Add_Ag'])){ 
						?>
						
            <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" style="font-family: sans-serif; ">×</button>
							<?php echo $_SESSION['Add_Ag'] ; ?>
						</div>
            	    <?php unset($_SESSION['Add_Ag']);		
							
					}?>



<form id="register" action="Adtion_Ag.php" method="POST"  >



<h5>  <span style="color:red;">   *</span> Full Name:<h5>
  <input type="text" class="form-control" required="required"  placeholder="Full Name" name="name" style="height: 60px;"> 
                <br/>
                <h5>  <span style="color:red;">   *</span> Email:<h5>
  <input type="text" class="form-control" required="required"  placeholder="Enter Email" name="email" style="height: 60px;">
                <br/>
                <h5>  <span style="color:red;">   *</span> Password:<h5>
   <input type="password" class="form-control"  required="required"  placeholder="Password" name="passwd" style="height: 60px;">
                <br/>
              
                <h5>  <span style="color:red;">   *</span> Address:<h5>
    <textarea rows="6" class="form-control"   required="required" placeholder="Address" name="address"></textarea>
                <br/>
                <h5>  <span style="color:red;">   *</span> Descriptoin:<h5>
  	<textarea rows="6" class="form-control"  required="required" placeholder="Descriptoin" name="description"></textarea>
            <br/>
                   
            <h5>  <span style="color:red;">   *</span> Image:<h5>
   	<input type="file" name="photo">
            <br/>
            <br/>
            <h5>  <span style="color:red;">   *</span> Phone Number:<h5>
   <input type="number" class="form-control"   required="required"  placeholder="Enter Phone Number" name="phone" style="height: 60px;">
                <br/>
                <button type="submit" class="btn btn-info" name="Submit" style="width:100%">Add</button>
                <br/>
    </form>   


                
        </div>
  
</div>
</div>
</div>

<br/>

                            <!-- Change password-->
				<?php    include('Change_pass_Admn.php'); ?>
                               
<!-- 3 footer -->


<br/>
<div class="footer"style="margin-bottom:-500px;">
	
<p style="bottom: 0px; background:url('pp.jpg'); width:100%; height:70px;"><span class=" glyphicon glyphicon-bullhorn "  style="color:#999 ">  My home commnty</span>  <img src="Log 3.jpeg"  style="width:70px; height:70px; float:right;"alt=""></p>		
</div>


</body>
</html>