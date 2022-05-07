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
                           <?php session_start(); ?>
						
         <nav class="navbar bg-dark navbar-dark navbar-expand-lg fixed-top" style="margin-top:-10px;" >
	<div class="container">
	          
	          <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler " type="button"  data-toggle="collapse" data-target="#toggler" >
	               <span class="navbar-toggler-icon"></span>
	          </button>
        <div class="collapse navbar-collapse" id="toggler">
		   <div class="nav navbar-nav navbar-right " >
				<a class="nav-item nav-link active"  href="Home-Admn.php" > <i class=" glyphicon glyphicon-home"></i> Home</a>
               <a class="nav-item nav-link active"  href="gestion_Agent.php">  Manage Agents</a></li>
               <a class="nav-item nav-link active"  href="gestion_Property.php">  Manage Properties</a></li>
               <a class="nav-item nav-link active"  href="Pr_for_Buy.php"> Properties For Buy</a>
               <a class="nav-item nav-link active"  href="Pr_for_Rent.php"> Properties For Rent</a>
         
           </div>
          
       
      <div class="dropdown"  style=" position: relative;">
           <a  class="nav-item nav-link dropdown-toggle"  data-toggle="dropdown" >

                    <div class="navbar-brand d-none d-sm-inline-block"  style="border:2px solid white; border-radius:15px; padding:4px; margin-left:4px; "><i class="glyphicon glyphicon-user"></i> Admin</div></a>

                            <ul class="dropdown-menu">
                                    <li><a href="" data-toggle="modal" data-target="#change_Admn" style="margin-left:10px;"><i class="glyphicon glyphicon-user"></i> Change Password</a></li>
                                    <p style="   border: 1px solid black; width:90%;"><p>
                                <li> <a  href="logout_Admn.php"style="margin-left:10px;"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                                    <p style="   border: 1px solid black; width:90%;"><p>
                                
                            </ul>
                    </div> 
                
	      </div>
        
            <style>
      .userprofile{
        padding: 0px;
        margin: 0px;
        border-radius: 5px;
        width:60px;
        height:50px;
      }
      .dropdown-menu {
    width: 180px;
    height: auto;
    font-weight: bold;
    border-radius: 5px;
    font-size: 18px;
    padding-left: 10px;
}

.dropdown-menu a {
    text-decoration: none;
    font-weight: bold;
    text-align: center;
    color: #555
}
      .nav-link {
    font-size: 20px;
    color: whitesmoke;
    font-family: sans-serif;
    font-style: initial;
    border: 20px;
 
    font-display: inherit;   }

    .navbar-right a:hover {
    background: #999;
  
}
      </style>

</nav>
<br/>

     <!-- Link bootstrap-->    
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>










    
</body>
</html>