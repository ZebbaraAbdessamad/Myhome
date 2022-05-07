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
						
                           <nav class="navbar bg-dark navbar-dark navbar-expand-lg fixed-top">
	<div class="container">
	          <div class="navbar-brand d-none d-sm-inline-block">My  home</div>
	          <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler " type="button"  data-toggle="collapse" data-target="#toggler" >
	               <span class="navbar-toggler-icon"></span>
	          </button>
        <div class="collapse navbar-collapse" id="toggler">
		   <ul class="nav navbar-nav navbar-right">
				<li><a class="nav-item nav-link active"  href="Home.php"> Home</a></li>
				<li><a class="nav-item nav-link active" href="About.php">About</a></li>
				<li><a class="nav-item nav-link active" href="Agent.php">Agents</a></li>
				<li><a class="nav-item nav-link active" href="Loging.php">Loging</a></li>
			  <li><a class="nav-item nav-link active" href="Register.php">Registration</a></li>
           </ul>
        </div>
	</div>
</nav>
<br/>
<br/>	
    <!-- 2eme headar-->
    <div class="container"> 

<div class="header" style="display:flex" class="lilist"> <img src="insta.jpg" alt="Logo Image" height="100" width="100"></a>
  <div class="row" class="modf">
    <section class="nav nav-pills">
<ul class="nav"  style="margin-top: 30px; padding-left:200px; " >
<div class="col-sm-6 col-lg-6 col-xs-6"><li class="nav-item "><a class="nav-link" href="louer.php" style="   font-display: inherit; color: rgb(68, 18, 18); border: solid  #999 1px;">RENT</a></li></div > 
<div class="col-sm-6 col-lg-6 col-xs-6"><li class="nav-item "><a  class="nav-link" href="Acheter.php" style="margin-left:10px;  padding-right:50px;    font-display: inherit;  color: rgb(68, 18, 18); border: solid #999 1px;" >BUY</a></li></div > 
  </ul>
    </section>
  </div>
</div>

</div>
<p style="border:solid black 8px;"></p>
<br/>


<!-- jhjkjhkv-->


<div class="card" style=" width: 400px; height:300px; margin:20px;"  >
                <div class="card-header text-center" style="height: 70px;">
                    <p class="card-text "><h5><?php echo $row['matiere'] ;?></h5> </p>
                </div>
                <div class="card-body" style="height:180px;">
                  <h5 class="card-title"><h4 style=" text-align-last: center;"><?php echo $row['nom_tache'] ;?></h4> </h5>
                  <br>
                  <p style="  overflow: hidden; text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical; " class="card-text" id="text"><?php echo $row['description'] ;?></p>
                    <a data-toggle="modal" data-target="#tache_<?php echo $row['id_tache']; ?>" href=""><p>Détails</p></a>
                </div>
                <div class="card-footer" style="height: 55px;">
                    
                </div>
              </div>
              
                  <div class="modal" id="tache_<?php echo $row['id_tache']; ?>">
                      <div  class="col-md-5 container my-5 "  >
                              <div class="card" style="width: 600px; height:auto; margin:20px;" >
                                  <div class="card-header text-center">
                                      <p class="card-text"> <?php echo $row['matiere'] ;?></p>
                                  </div>
                                  <div class="card-body" style="height:auto;">
                                    <h5 class="card-title"><h3 style=" text-align-last: center;"><?php echo $row['nom_tache'] ;?></h3> </h5>
                                    <br>
                                    <p class="card-text" id="text"><?php echo $row['description'] ;?></p>
                              
                                  </div>
                                  <div class="card-footer" style="text-align: center;">
                                  <center><a data-toggle="modal" data-target="#del_<?php echo $row['id_tache']; ?>"   style=""><i class="fas fa-trash"></i></a></center>

                                  </div>
                              </div>
                      </div>
                  </div>



<!-- 6eme Loging-->


<div calss="container">
<div id="myModel" class="modal fade"  role="dialog">
<div class="popup">
  <div class="popup-content">
  <button class="close" data-dismiss="modal" value="close"> &times;</button>
  <img src="dk.jpg"  style="height:100px;width:100px;">
           <h2>Login</h2>
           <form action="loging.php" method="POST">
           
<input type="text" class="form-control"   required =" email"  placeholder="Enter Email" name="email">
                <br/>
                <input type="password"    required="password"   class="form-control" placeholder="Password" name="pass" >
                <br/>
<button class="btn btn-secondary" type="submit"  name="login" style="width:100%">Login </button>
</form>
  </div>
         <script >
             document.querySelector('button').addEventListener('click' , function(){
           document.querySelector('.popup').style.display='flex';});
        
                 document.querySelector('.close').addEventListener('click' , function(){
                   document.querySelector('.popup').style.display = 'none'; 
              
                  });
           
       </script>
</div>
</div>
</div>

 
       <!-- Link bootstrap-->    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
 <!-- 5eme buttom Iformations-->
 <div class="footer">
  <br/>
<div class="container" style="bottom:0px;">
<div class="row">
         <div class="col-lg-3 col-sm-3" >
                   <h4 style="color: aliceblue;">Information</h4>
                   <ul class="row">
  				<li class="col-lg-12 col-sm-12 col-xs-3"><a href="Home.php" style="color: aliceblue;"> Home</a></li>	            
          <li class="col-lg-12 col-sm-12 col-xs-3"><a href="About.php" style="color: aliceblue;">About</a></li>
          <li class="col-lg-12 col-sm-12 col-xs-3"><a href="Agent.php" style="color: aliceblue;">Agents</a></li>         
          
                 </ul>
        </div>
            
            <div class="col-lg-3 col-sm-3 text-center"  >
            <h4  style="color: aliceblue;">Newsletter</h4>
                    <p  style="color:#999;">Enter your question.</p>
                    <form action="Sendemail.php" method="POST">
            <input type="email" placeholder="Enter Your email address" required="required" name="email" class="form-control">
            <br/>
            <textarea rows="2" class="form-control" placeholder="Message" name="Message"></textarea>
            <br/>
            <input type="submit" class="btn btn-success" value="send" name="send" style="width: 100%;">
                    </form>
            </div>
            
            <div class="col-lg-3 col-sm-3 text-center" style="color: aliceblue;">
            <h4>Follow us</h4>
            <a href="https://www.facebook.com/Myhome" target="_blank"><img src="facebook.png" alt="facebook" style="background-color: lightgray;"></a>
            <a href="https://twitter.com/Myhome" target="_blank"><img src="twitter.png" alt="twitter" style="background-color: lightgray;"></a>
            <a href="https://linkedin.com/Myhome" target="_blank"><img src="linkedin.png" alt="linkedin" style="background-color: lightgray;"></a>
            </div>

             <div class="col-lg-3 col-sm-3 text-center">
             <h4 style="color: aliceblue;">Contact us</h4>                   
                    <p style="color:  #999;"><b>My home</b>
           <br> Work location:
           Guelmim,Rue ifni ,N°123<br>
           <span class="glyphicon glyphicon-envelope"></span> Email: <a class="mail" style="color: #999;" href="mailto: myhome@gmail.com "> Myhome@gmail.com </a><br>
           <span class="glyphicon glyphicon-earphone" ></span>   phone number:     +212 600044411</p>
               </div>
               </div>
        <p class="copyright" style="color:  #999;">Copyright 2021. All rights reserved.</p>
        <br/>
</div>



</body>
</html>