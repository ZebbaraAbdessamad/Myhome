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
	          <div class="navbar-brand d-none d-sm-inline-block">MY HOME</div>
	          <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler " type="button"  data-toggle="collapse" data-target="#toggler" >
	               <span class="navbar-toggler-icon"></span>
	          </button>
        <div class="collapse navbar-collapse" id="toggler">
		   <ul class="nav navbar-nav navbar-right ">
				<li><a class="nav-item nav-link active"  href="Profile.php"> Home</a></li>
				<li><a class="nav-item nav-link active" href="About-Agent.php">About</a></li>
				<li><a class="nav-item nav-link active" href="Agents-Ag.php">Agents</a></li>
           </ul>
          
         
      <div class="dropdown"  style=" position: relative;">
           <a  class="nav-item nav-link dropdown-toggle"  data-toggle="dropdown">
               <?php 
               include('connectionBD.php');

               
               session_start();
               if( isset($_SESSION['email'])){
              // $sql="select * from agents where email='". $_SESSION['email']."'";
               //$getdata=mysqli_query($connect,$sql);
                  // $rec_count = mysqli_num_rows($getdata);
                   
                  $sql="select * from  agents where email='". $_SESSION['email']."'";
                 	$sel =$connect->query($sql);
                  $data=$sel->fetch(PDO::FETCH_ASSOC);}
              else{
                  //pour verifier logout
                echo"<script>location.href='Home.php'</script>";
              }

            //  echo" <script> alert('". $_SESSION['email']."')</script>"; 
                 
               ?>
               <img class="userprofile" src="/Logement/image-Agent/<?php echo $data['image']; ?>" ></a>
      <style>
      .userprofile{
        padding: 0px;
        margin: 0px;
        border-radius: 5px;
        width:50px;
        height:50px;
        border-radius: 50%;
      }
 
      </style>

        <ul class="dropdown-menu">
            
              <li>  <a   href="EditeProfile.php">Edit Profile</a></li>
              <p style="border: 1px solid black; width:90%;"><p>
               <li> <a   href="AddProprety.php">Add Property</a></li>
               <p style="border: 1px solid black; width:90%;"><p>
               <li> <a  href="View_property.php">View Properties</a></li>
               <p style=" border: 1px solid black; width:90%;"><p>
                <li><a href="" data-toggle="modal" data-target="#change" >Change Password</a></li>
                <p style="border: 1px solid black; width:90%;"><p>
               <li> <a  href="logout.php">Logout</a></li>
               <p style="border: 1px solid black; width:90%;"><p>
               </p> 
          </ul>
          </div> 
	</div>
</nav>
<br/>
<br/>	
               <br/>
     <!-- 2eme headar-->
     <div class="container"> 

  <div class="header" style="display:flex" class="lilist"> <img src="LOGO/Log 7.jpeg" alt="Logo Image" height="100" width="130">
    <div class="row" class="modf">
      <section class="nav nav-pills">
  <ul class="nav"  style="margin-top: 30px; padding-left:200px; " >
  <div class="col-sm-6 col-lg-6 col-xs-6"><li class="nav-item "><a class="nav-link" href="louer-Ag.php" style="   font-display: inherit; color: rgb(68, 18, 18); border: solid  #999 1px;">RENT</a></li></div > 
  <div class="col-sm-6 col-lg-6 col-xs-6"><li class="nav-item "><a  class="nav-link" href="Acheter-Ag.php" style="margin-left:10px;  padding-right:50px;    font-display: inherit;  color: rgb(68, 18, 18); border: solid #999 1px;" >BUY</a></li></div > 
    </ul>
      </section>
    </div>
  </div>

</div>

<p style="border:solid black 8px;"></p>
</body>
</html>