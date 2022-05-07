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
						
               
  
    <?php include('Navbar_Profile.php')?>

  <!-- 3eme Edit-->


  <div class="container">		
  <div class="row register">	
<div class="col-lg-12 ">	
 
<p style="color:#990000; font-size:14px; text-align:center;">		  </p>

                    <form action="EidtePrf.php" method="POST" >
                    <div class="row">
				  <div class="col-md-6">
                <label style="    font-weight: bold;font-size:20px;">Full Name:</label>
                <br/>
                <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo $data['Name']; ?>">
                <br/>
         </div>
         <div class="col-md-6">
                <label style="    font-weight: bold;font-size:20px;">Email:</label>
                <br/>
                <input type="text" class="form-control" placeholder="Enter Email" readonly="" name="email" value="<?php echo $data['email']; ?>">
                <br/>
         </div>
         <div class="col-md-12">
				<label style=" font-weight: bold;font-size:20px;">Address:</label>
                <br/>
                <textarea rows="6" class="form-control" placeholder="Address" name="add"><?php echo $data['address']; ?></textarea>
                <br/>
         </div>
         <div class="col-md-12">
      			<label style=" font-weight: bold;font-size:20px;">Description:</label>
                  <br/>
                <textarea rows="6" class="form-control" placeholder="description" name="description"><?php echo stripslashes($data['description']) ; ?></textarea>
                <br/>
         </div>
        
         <div class="col-md-4">       
                <label style=" font-weight: bold;font-size:20px; margin-top:50px;" >Phone Number:</label>
                <br/>
                <input style="margin-top:15px;" type="number" class="form-control" placeholder="Enter Phone Number" name="phone" value="<?php echo $data['Tele'] ; ?>">
         </div>
         <div class="col-md-4">
                <label style=" font-weight: bold;font-size:20px; margin-top:50px;">Image:</label>
                  <br/>
                  <br/>        
                <input type="file" name="Image">
                  <br/>
                  <br/>
         </div>
         <div class="col-md-4">
             <div class="card" style="margin: 10px; padding:0px; width:300px;"> 
                    <div class="card-header"> Image: </div>
                      <div class="card-body" style="padding:10px;">
                            <img src="/Logement/image-Agent/<?php echo $data['image']; ?>"style=" max-width:100%; width:200px; margin-left:40px;height:150px;max-height: 100%; ">
                            <br/>
                            <br/>
                      </div>   
             </div>
         </div>

                <button type="submit" class="btn btn-success" name="Submit">Update Profile</button>
               


       </div>             
        </form>
    </div>
  </div>


</div>

<br/>
  <!--  change password-->
  <?php include('change_Password.php')?>

    <!-- 5eme buttom Iformations-->
    <?php include('footer_Agent.php')?>
</body>
</html> 