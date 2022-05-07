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
                           <!-- 3eme Detail-->

                           <div class="container">

<?php
$host = "127.0.0.1";
$user = 'root';
$password = '';
$database = 'my home';
$connect=mysqli_connect($host, $user,$password,$database);

$sql="select * from logements";
$getdata=mysqli_query($connect,$sql);
	$rec_count = mysqli_num_rows($getdata);
	$rec_limit = 4; 
  
  	
	if( isset($_GET['page'] ) )
	{
	   $page = $_GET['page'] + 1;
	   $offset = $rec_limit * $page ;
	}
	else
	{
	   $page = 0;
	   $offset = 0;
	}
	$new = $rec_count / $rec_limit ;

	$left_rec = $rec_count - ($page * $rec_limit);
	
	$sql= "select * from logements";
	$sel = mysqli_query($connect,$sql);

?>
  

	
  <div class="row">
  <div class="row justify-content-center">

<?php 
foreach($sel as $row){
?>

     <div class=" col-lg-3 col-md-6" style="margin-bottom: 30px;">
     <div class="card shadow" style="width: 18rem;">
	 <div class="inner">
          <img src="<?php echo $row['image_Lg']; ?>" class="card-img-top" alt="card image cap">
		  </div>
        <div class="card-body text-center">
		<h3 class="card-title" style="color:darkblue; background-color:rgb(241, 241, 241); border-radius:20px;"><?php echo $row['genre_Lg']; ?></h3>
    <h3  style=" color: rgb(44, 226, 19);text-align:center;"> <?php echo $row['Prix_Lg']; ?>$</h3>
             <h5 class="card-title"><?php echo $row['Titre-Lg']; ?></h5>
            <p class="card-text"><?php echo $row['Description-Lg']; ?></p>
           <a href="" data-toggle="modal" data-target="#log_<?php echo $row['Lid']; ?>" class="btn btn-success">Details</a>
        </div>
    </div>
   </div>
   <div class="modal" id="log_<?php echo $row['Lid']; ?>">
                      <div  class="col-md-5 container my-5 "  >
                              <div class="card" style="width: 600px; height:auto; margin:20px;" >
                                  <div class="card-header text-center">
                                      <p class="card-text"> abff</p>
                                  </div>
                                  <div class="card-body" style="height:auto;">
                                    <h5 class="card-title"><h3 style=" text-align-last: center;">hfdskjhfkj</h3> </h5>
                                    <br>
                                    <p class="card-text" id="text">djkf</p>
                              
                                  </div>
                                 
                              </div>
                      </div>
                  </div>
<?php } ?>

</div>
 </div>

                           <?php
     
      echo"<br/>";
	
			if( $left_rec > $rec_limit && $page != 0 )
			{
			
			   $last = $page - 2;
			   echo "<a class=\"pagination_button\" href=\"Detail.php?page=$last\">Previous</a> |";
         echo"<br/>";
			   echo "<a class=\"pagination_button\" href=\"Detail.php?page=$page\">Next</a>";
			}
			if( $page == 0 )
			{
			  
			   echo "<a class=\"pagination_button\" href=\"Detail.php?page=$page\">Next</a>";
			}
			if($left_rec <= $rec_limit) 
			{
			   $last = $page - 2;
			   echo "<a class=\"pagination_button\" href=\"Detail.php?page=$last\">Previous</a>";
			}

	?>
     </div>
      </div>
  </div>
  
  <br/>
<br/>

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

 
	</script>
 <!-- 5eme buttom Iformations-->
 <?php include('footer.php')?>



</body>
</html>