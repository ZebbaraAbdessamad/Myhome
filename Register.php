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
    <title>my home</title>
</head>
<body>
                  <!-- 1eme Navbar-->

                  <?php include('Navbar_Myhome.php')?>
                        
                        <!-- 3eme Register-->
                           <div class="container">

                           <?php if(isset($_SESSION["Register_Ag"]) ){?>  
            <div class="alert alert-success">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <?php echo $_SESSION["Register_Ag"];  ?>						</div>   
                           <?php  unset($_SESSION['Register_Ag']); }  ?>  

<div class="spacer">	

<div class="row register" style="text-align: position;">	
  <div class="col-lg-12">		

<form id="register" action="addRegister.php" method="POST"  >


<div class="row">
            <div class="col-md-4">
                  <h5>  <span style="color:red;">   *</span> Full Name:<h5>
                    <input type="text" class="form-control" required="required"  placeholder="Full Name" name="name" style="height: 60px;"> 
                                  <br/>
              </div> 
                 <div class="col-md-4">                  
                          <h5>  <span style="color:red;">   *</span> Email:<h5>
                       <input type="text" class="form-control" required="required"  placeholder="Enter Email" name="email" style="height: 60px;">
                          <br/>
                </div> 
                <div class="col-md-4">         
                          <h5>  <span style="color:red;">   *</span> Password:<h5>
                   <input type="password" class="form-control"  required="required"  placeholder="Password" name="passwd" style="height: 60px;">
                          <br/>
                </div>
                        
                <div class="col-md-12">
                    <h5>  <span style="color:red;">   *</span> Address:<h5>
                  <textarea rows="6" class="form-control"   required="required" placeholder="Address" name="address"></textarea>
                              <br/>
             </div>
             <div class="col-md-12">
                 <h5>  <span style="color:red;">   *</span> Descriptoin:<h5>
              <textarea rows="6" class="form-control"  required="required" placeholder="Descriptoin" name="description"></textarea>
                      <br/>
               </div>
                <div class="col-md-6">    
                    <h5>  <span style="color:red;">   *</span> Image:<h5>
                  <input type="file" name="photo">   <br/>      <br/>
               </div>
               <div class="col-md-6"> 
                    <h5>  <span style="color:red;">   *</span> Phone Number:<h5>
                  <input type="number" class="form-control"   required="required"  placeholder="Enter Phone Number" name="phone" style="height: 60px;">
                                <br/>
                 </div>
                          <input type="hidden" name="date" value="<?php echo date("y-m-d") ?>" >

                          <button type="submit" class="btn btn-success" name="Submit" style="width: 100%;">Register</button>
                          <br/>
   </div>                         
              </form>   


                          
                  </div>
            
          </div>
          </div>
          </div>

          <br/>


                      <!-- 6eme Loging-->

                <?php include('Modal_loging.php')?>

                
                  <!-- 5eme buttom Iformations-->
              <?php include('footer.php')?>

</body>
</html>