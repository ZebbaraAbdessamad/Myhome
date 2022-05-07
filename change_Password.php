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
        
                     <div class="modal" id="change">
                            <div  class="col-md-5 container my-5 "  >
                                    <div class="card" style="width: 500px; height:auto; margin:20px;background:url('blane.png');" >
                                        <div class="card-header text-center">
                                            <h3 class="card-text" style="color:#999;"> Change Password</h3>
                                        </div>
                 <div class=" card-body ">

                    <form  method="post" action="Change_pass.php" >
                                        <div class=" form-group">

                                           <!--  Valid change password -->
                                         <div class=" text-center">
                                                <?php 
                                                if(isset($_SESSION["ch_pass"]) ){?>
                                                <h6 class="text-success" style=" font-size:20px;"> <?php echo $_SESSION["ch_pass"];  ?></h6>
                                                <?php  unset($_SESSION['ch_pass']); }  ?>

                                                <?php 
                                                if(isset($_SESSION["error_pass"]) ){?>
                                                <h6 class="text-danger" style=" font-size:20px;"> <?php echo $_SESSION["error_pass"];  ?></h6>
                                                <?php  unset($_SESSION['error_pass']); }  ?>
                                        </div>

                                        <label ></label>            
                                       <input name="pass1" type="password" class="form-control" placeholder="Enter old password" required style="height: 50px; margin-top:-15px;margin-bottom:10px;">
                 </div>
                                  
                                   <div class=" form-group">
                                       <input name="pass2"  type="password" class="form-control" style="width:100%; height: 50px; margin-top:10px;" placeholder="Enter New password"  required >
                                   </div>
                                   
                                   <br>
                                   <div class="card-group">
                                   <button type="submit" name="Login" class="btn btn-primary    container" style="width: 100%">Save</button>
                                   </div>
                      </form>
                                    
                                     
                            </div>
                        </div>
                 </div>
         </div>


                        
</body>
</html>