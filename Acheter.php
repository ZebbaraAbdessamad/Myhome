
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



 <!-- 4eme Card-image -->

 <?php
      include('connectionBD.php');

      $sql="select * from logements";
      $getdata=$connect->query($sql);
        $rec_count =$getdata->rowcount();
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
        
        $sl= "select * from logements,agents where (genre_Lg='Buy' and Etat_Lg='1') and agents.Aid=logements.Aid LIMIT $offset, $rec_limit";
        $sel =$connect->query($sl);

      ?>
<div class="container">
  <div class="row">
  <div class="row justify-content-center">

<?php 
foreach($sel as $row){
?>

     <div class=" col-lg-3 col-md-6" style="margin-bottom: 30px;">
     <div class="card shadow" style="width: 19rem; ">
	 <div class="inner">
          <img src="<?php echo $row['image_Lg']; ?>" class="card-img-top" alt="card image cap" style="height:200px;" >
		  </div>
        <div class="card-body text-center">
		<h3 class="card-title" style="color:darkblue; background-color:rgb(241, 241, 241); border-radius:20px;"><?php echo $row['genre_Lg']; ?></h3>
    <h3  style=" color: rgb(44, 226, 19);text-align:center;"> <?php echo $row['Prix_Lg']; ?>$</h3>
             <h5 class="card-title"><?php echo $row['Titre_Lg']; ?></h5>
            <p class="card-text"><?php echo $row['Description_Lg']; ?></p>
           <a href="" data-toggle="modal" data-target="#log_<?php echo $row['Lid']; ?>" class="btn btn-success">Details</a>
        </div>
    </div>
   </div>

   <div class="modal" id="log_<?php echo $row['Lid']; ?>">
          <div  class="col-md-5 container my-5 ">
                <div class="card" style=" width:1000px; height:auto; margin:20px; " >
				      <div class="card-header text-center">
                           <p class="card-text"> <h3 style=" text-align-last: center;">Information</h3> </p>
                       </div>
                 
					<div class="card-body" style="height:auto; padding-left:20px;">

					<h5 style="margin-top:25px; font:35px; background:wheat; height:38px; padding:5px; border-radius:8px;" class="card-title">Details</h5> 
								<div style="margin-top:20px ;">
								<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; ">  Price :</h5>	<span style="padding-left:25px; font-size:20px;  color: rgb(44, 226, 19);"><?php  echo $row['Prix_Lg'];?>$</span></span>
					<br/>

							<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; ">  Agent name :</h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['Name'];?></span></span>
					<br/>
					<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; ">  Address:</h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['adress_Lg'];?></span></span>
					<br/>
					<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; "> Property class:</h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['genre_Lg'];?></span></span>
					<br/>
					<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; ">Property Type:</h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['Type_Lg'];?></span></span>
					<br/>
				</div>

				<div style=" margin-top:-272px; padding-left:550px;  display:flex-block;">	
				<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; "> Bed Rooms:</h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['chambres'];?></span></span>
					<br/>
					<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; ">  Bathroom:</h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['Toilet'];?></span></span>
					<br/>
					<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; "> kitchen:</h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['cuisines'];?></span></span>
					<br/>
					<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; ">  Latitude: </h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['Largeur_Lg'];?></span></span>
					<br/>
					<span style="display: flex;padding-left:20px;"> <h5 style="color:#999; "> Longitude:</h5>	<span style="padding-left:25px; font-size:20px;"><?php  echo $row['Longeur_Lg'];?></span></span>
					<br/>
		</div>

		<span style="margin-bottom: 30px; padding-left:20px;">   <img style="width:200px;height:135px;" src="<?php echo $row['image_Lg']; ?>"></span>
				
				<?php $sql2="select * from images where Lid = " . $row['Lid'];
					$result1=$connect->query($sql2);
					foreach($result1 as $rw){
					?>
		<span style="margin-bottom: 30px; padding-left:20px;">   <img style="width:200px;height:135px;" src="room_img/<?php echo $rw['image']; ?>"></span>
		<?php } ?>

		<h5 style="margin-top:25px; font:35px; background:wheat; height:38px; padding:5px; border-radius:8px;" class="card-title">Demand</h5>  
		
				
					<form role="form" method="post" action="commande.php" style="padding-left:30px">
							
							<input type="text" class="form-control" required="" name="name" placeholder="Full Name" style="width:95%; height: 50px; margin-top:40px;">
							<br/>
							<input type="email" class="form-control" required="" name="email" placeholder="Enter email"style="width:95%; height: 50px;">
							<br/>
							<input type="number" class="form-control" required="" name="number" placeholder="your number"style="width:95%; height: 50px;">
							<br/>
							<input type="text" class="form-control" required="" name="adresse" placeholder="your address"style="width:95%; height: 50px;">
							<br/>
				<textarea rows="4" class="form-control" required="" name="mesg" placeholder="Whats on your mind?" style="width:95%;"></textarea>	
				                   <br/>
<input type="hidden" name="date" value="<?php echo date("y-m-d") ?>" >
<input type="hidden" name="id_lg" value="<?php echo $row['Lid']; ?>" >

                   <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
      </form>

									
                              
                                  </div>
                                 
                              </div>
                      </div>
                  </div>
<?php } ?>

</div>
 </div>
</div>
                           <?php
     
      echo"<br/>";
	
			if( $left_rec > $rec_limit && $page != 0 )
			{
			
			   $last = $page - 2;
			   echo "<a class=\"pagination_button\" href=\"Acheter.php?page=$last\">Previous</a> |";
         echo"<br/>";
			   echo "<a class=\"pagination_button\" href=\"Acheter.php?page=$page\">Next</a>";
			}
			if( $page == 0 )
			{
			  
			   echo "<a class=\"pagination_button\" href=\"Acheter.php?page=$page\">Next</a>";
			}
			if($left_rec <= $rec_limit) 
			{
			   $last = $page - 2;
			   echo "<a class=\"pagination_button\" href=\"Acheter.php?page=$last\">Previous</a>";
			}

	?>
     </div>
      </div>
  </div>
  
  <br/>
<br/>



<br/>
</br><br/>
</br><br/>
</br><br/>
</br><br/>


                                        <!-- 6eme Loging-->

                                <?php include('Modal_loging.php')?>



                                
       <!-- 5eme buttom Iformations-->

       <?php include('footer.php')?>

</body>
</html> 