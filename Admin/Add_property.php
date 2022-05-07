
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

                        
                        <div class="container">	


                        <div style="background-color: rgb(145, 204, 204); color:white; margin-bottom:25px; width:240px; height:60px; border-radius:10px; padding:10px;">
						<h3><i class=" glyphicon glyphicon-plus-sign"></i>Add Property</h3>
						</div>

<div class="spacer">	
<div class="row register">	
<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">		


<?php
 if(isset($_SESSION['Add_Pr'])){ 
						?>
						
            <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" style="font-family: sans-serif; ">×</button>
							<?php echo $_SESSION['Add_Pr'] ; ?>
						</div>
            	    <?php unset($_SESSION['Add_Pr']);		
							
					}?>



  

        <div class="box-content">
   
       
                     <form action="Aditon_Property.php" method="POST"  >
                        </br>
   	<label style="font-weight:bold; "> <h5><span style="color:red;">   *</span>  Property title:<h5></label>
     <br/>
  
    <input type="text" class="form-control"  required  placeholder="Property Title" name="Titre-Lg" style="height:65px;width:100%;">
          <br/>
    <span style="color:red;">   *</span> 	<label style="font:lighter;"> Property class: </label>
                 <br/>
                 <br/>
            <select class="form-control"  required  name="genre-Lg" style="height:65px; width:100%;">
                <option value="Buy">Buy</option>
                <option value="Rent">Rent</option>
              </select>
              <br/>

            <span style="color:red;">   *</span>  <label style="font:lighter;" >Property Type: </label>
                                   <br/>
                                   <br/>
                                <select class="form-control"  required  name="Type-Lg" style="height:65px;width:100%;">
                                    <option value="Apartment">Apartment</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Building">Building</option>
                                    <option value="House">House</option>
                                </select>
                                <br/>
                  
                 <span style="color:red;">   *</span> <label>Address:</label>
                <br/>
                <br/>

                <textarea class="form-control"  required  placeholder="Address" name="adress-Lg" style="height:65px;width:100%;"></textarea>
                <br/>
                
                
                <span style="color:red;">   *</span>                <label>Price:</label>
                <br/>
                <br/>
                
                <input type="number" class="form-control"  required  name="Prix-Lg" placeholder="Price" style="height:65px;width:100%;">
                <br/>
                <h5>  <span style="color:red;">   *</span> Descriptoin:<h5>
                <br/>
      
                <textarea rows="6" class="form-control"  required  placeholder="Descriptoin" name="Description-Lg" style="width:100%;"></textarea>
               <br/>
                <span style="color:red;">   *</span>   <label> Bed Rooms:</label>
                 <br/>
                 <br/>
              
                 <input type="number" class="form-control"  required  name="chambres" placeholder="Bed Rooms" style="height:65px; width:100%;">
                 <br/>
                 <span style="color:red;">   *</span>               <label>Bathroom:</label>
                 <br/>
                 <br/>
               
                 <input type="number" class="form-control"  required  name="Toilet" placeholder="Bathroom:" style="height:65px; width:100%;">
                    <br/>
                <span style="color:red;">   *</span>     <label>kitchen:</label>
                 <br/>
                 <br/>
                
                 <input type="number" class="form-control"  required name="cuisines" placeholder="Kitchen" style="height:65px;width:100%;">
                <br/>
                <span style="color:red;">   *</span>    <label>Latitude:</label>
               <br/>
               <br/>
               
               <input type="number" name="Largeur-Lg" placeholder="Latitude" class="form-control"  required style="height:65px; width:100%;">
               <br/>
               <span style="color:red;">   *</span>    <label>Longitude:</label>
               <br/>
               <br/>
              
               <input type="number" name="Longeur-Lg" placeholder="Longitude" class="form-control"  required  style="height:65px; width:100%;">
           
          
   <br/>
               
      <span style="color:red;">   *</span>    <label> Images:</label> 
               <br/>
               <br/>

                              <div style="display: flex;">
                              <label style="font-size:16px; color:#999;">Principal image:</label> 
                        <input type="file" name="image_Lg"  required  class="text-long" >
                        <br/>  		
                        <br/>
                        <label style="font-size:16px; color:#999;"> kitchen image:</label> 
                        <input type="file" name="image1"  required  class="text-long" >
                        <br/>
                        <br/>
                              </div>
               <br/>

                                <div style="display: flex;">
                                <label style="font-size:16px; color:#999;">Bathroom image:</label> 
                  <input type="file" name="image2"  required  class="text-long" >
                  <br/>  		
                  <br/>
                  <label style="font-size:16px; color:#999;"> Bedroom image:</label> 
                  <input type="file" name="image3"  required  class="text-long" >
                  <br/>
                  <br/>
                        </div>
                 <br/>
             <button type="submit" class="btn btn-primary" name="Submit" style="width:100%;">Add</button>
    
                <br/>
        </form>
      </div>
  
</div>
</div>
</div>
</div>
                          <!-- Change password-->
				<?php    include('Change_pass_Admn.php'); ?>


                          <!-- 3 footer -->

                          <br/>
    <div class="footer"style="margin-bottom:-500px;">
      
    <p style="bottom: 0px; background:url('pp.jpg'); width:100%; height:70px;"><span class=" glyphicon glyphicon-bullhorn "  style="color:#999 ">  My home commnty</span> 
    <img src="Log 3.jpeg"  style="width:70px; height:70px; float:right;"alt=""></p>		
    </div>


</body>
</html>