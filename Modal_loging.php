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
         


<div calss="container">
<div class="modal" id="Mymodal">
                      <div  class="col-md-5 container my-5 " >
                          <div class="card" style="height:auto; background:url('blane.png');">  
                              <div class="card-header text-center">
                                      <h2>Login</h2>	
                              </div>
                              <div class=" card-body ">

                                  <form  method="post" action="loging.php"  enctype="multipart/form-data">
                                      <div class=" form-group">
                                          <label></label>
                            <!--  Valid login -->
                     <div class=" text-center">
                         
                            <?php 
                               
                               if(isset($_SESSION["msg"]) ){?>
                                <h6 class="text-danger" style="font-size:20px; margin-bottom:20px;"> <?php echo $_SESSION["msg"];  ?></h6>
                                <?php  unset($_SESSION['msg']); }  ?>
                       </div>
                                        
                                   <input name="email" type="text" class="form-control" placeholder="Enter email" required style="height: 50px;">
                                   </div>
                                      <!-- <input type="hidden" name="id"> -->
                                      <div class=" form-group">
                                          <label> </label>
                                          <input name="pass"  type="password" class="form-control" style="width:100%; height: 50px;" placeholder="Enter password"  required >
                                      </div><br>
                                      <div class="card-group">
                                      <button  type="submit" name="Login" class="btn btn-success container" style="width: 100%; ">Login</button>
                                      </div>
                                  </form>
                              </div><br>
                          </div>
                      </div>
                  </div>
          </div>
</div>



</body>
</html>