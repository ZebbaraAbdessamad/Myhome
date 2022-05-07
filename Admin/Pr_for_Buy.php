
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

                              <!-- 2 Gestion Agent -->
                    <br/><br/><br/><br/><br/>
                              <!-- Logout -->
                           <?php 
							 if(!isset($_SESSION['Email'])){
							echo"<script>location.href='Page_Login_Admn.php'</script>";
							 } ?>
                    
<div class="container">
<table class="table table-striped table-bordered bootstrap-datatable datatable" >

<?php
 if(isset($_SESSION['Pmsg'])){ 
						?>
						
            <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" style="font-family: sans-serif; ">×</button>
							<?php echo $_SESSION['Pmsg'] ; ?>
						</div>
            	    <?php unset($_SESSION['Pmsg']);		
							
					}?>
                    <!-- button Agent -->
 <a  href="Add_property.php"><button class="btn btn-warning" style="float: right; margin-bottom:20px;"> <i class=" glyphicon glyphicon-plus-sign"></i> Add New Proprety</button></a>
                               
<thead>
                                <tr style="background-color: rgb(158, 157, 155); text-align:center; ">
                                <th> N°</th>
                                <th>Properties Title</th>
                                <th>Properties class </th>
                                <th>Properties Type</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Address</th>
                                <th>Publish Date</th>
                                <th>Descriptoin</th>
                                <th> Agent Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                                </tr>
                                </thead>

<?php    include('Connection_Admin.php'); 
$sql= "select * from logements,agents where logements.Aid=agents.Aid and genre_Lg='Buy' ";
$sel = mysqli_query($connect,$sql);
?>
<?php 
$a=1;
foreach($sel as $row){
?>
		  <tr>
          <td><?php echo $a; $a++; ?> </td>
          <td><?php echo $row['Titre_Lg']; ?> </td>
          <td><?php echo $row['genre_Lg']; ?> </td>
          <td><?php echo $row['Type_Lg']; ?> </td>
          <td><img src="/Logement/<?php echo $row['image_Lg']; ?>" height="60" width="60"> </td>
          <td><?php echo $row['Prix_Lg']; ?> </td>
          <td><?php echo $row['adress_Lg']; ?> </td>
         <td><?php echo $row['Date_Lg']; ?> </td>
          <td><?php echo $row['Description_Lg']; ?> </td>
          <td><?php echo $row['Name']; ?> </td>
       
          <td class="center"> 
 
                  <?php if($row['Etat_Lg']=='1'){?>
                       <a href="Pr_for_Buy.php?Lid_inactive=<?php echo $row['Lid'];?>"> <button type="submit"  class="btn btn-success" name="active">Active</button></a>
										<?php }else{?>
                       <a href="Pr_for_Buy.php?Lid_active=<?php echo $row['Lid'];?>"> <button type="submit" class="btn btn-danger" name="inactive">Inactive</button></a>
               <?php }?>	
          </td>

        <td class="center"> 
  <a   href="Pr_for_Buy.php?Edite_Lid=<?php echo $row['Lid'];?>" data-toggle="modal" data-target="#edit_<?php echo $row['Lid']; ?>" class="btn btn-info" name="Edite" >
              <i class="glyphicon  glyphicon-edit"></i>  </a>

               <a class="btn btn-danger" href="Pr_for_Buy.php?property_Lid=<?php echo $row['Lid'];?>" title="Delete Agent" onClick="return confirm('Delete this Property?')">
                   <i class="glyphicon  glyphicon-trash"></i> </a>

         </td> 
                           
                            <!-- Activer Agent --> 
                    <?php  if(isset($_GET['Lid_inactive']))
            {  
                $sl="update logements set Etat_Lg='0' where Lid='".$_GET['Lid_inactive']."'";
                $result=mysqli_query($connect,$sl);
                $_SESSION['Pmsg']="property Deactivate Successfuly";
                echo"<script>location.href='Pr_for_Buy.php'</script>";
            
                exit;
            }?>
                           
                            <!-- desactiver Agent --> 
                            <?php  if(isset($_GET['Lid_active']))
                {
                
                    $sl="update logements set Etat_Lg='1' where Lid='".$_GET['Lid_active']."'";
                    $result=mysqli_query($connect,$sl);
                    $_SESSION['Pmsg']="property Active Successfuly";
                    echo"<script>location.href='Pr_for_Buy.php'</script>";
                    exit;
                }?>
                          
                          
                          <!-- delete Agent --> 
                        
                            <?php    if(isset($_GET['property_Lid']))
            {
                
                $sl="delete from logements where Lid='".$_GET['property_Lid']."'";
                $result=mysqli_query($connect,$sl);
                $_SESSION['Pmsg']="property Delete Successfuly";
                echo"<script>location.href='Pr_for_Buy.php'</script>";

                exit;
        
            }
                            ?>

   
        
          </tr>

          <div class="modal" id="edit_<?php echo $row['Lid']; ?>">
             <div  class="col-md-5 container my-5 " style="width:1000px;" >
                 <div class="card" style=" width:1000px; height:auto; margin:20px;" >
						
                                    <div class="card-header text-center" >
                                        <h4 class="card-text" style="color:#999;"> <i class=" glyphicon glyphicon-edit"></i>  Edite : <?php echo $row['Titre_Lg']; ?></h4>
                                    </div>
                          
                   <div class="card-body" style="height:auto; margin:20px;">
                     <h5 class="card-title"><h3 style=" text-align-last: center; margin-top:-20px; " class="text-primary">Information</h3> </h5>
									
		<form action="Up_Pr_for_Buy.php" method="POST" role="form">

        <label style="color:#999; font-size:20px;">Property Title:</label>
                <input type="text" class="form-control" name="title" placeholder="<?php echo $row['Titre_Lg']; ?>" value="<?php echo $row['Titre_Lg']; ?>" style="height: 50px;">
                <br/>

                <label style="color:#999; font-size:20px;">Property  class:</label> 
				    <select class="form-control" name="genre-Lg" style="height:50px; width:100%">
                <option value="Buy" <?php if($row['genre_Lg']=="Buy"){?>selected<?php }?> >Buy</option>  
                <option value="Rent" <?php if($row['genre_Lg']=="Rent"){?>selected<?php }?> >Rent</option>
                </select>
              

                <br/>

						  <label class="control-label" style="color:#999; font-size:20px;">Property Type:</label>
				              </select>
                <select  class="form-control"  name="Type_Lg" style="height:50px; width:100%">
                <option value="Apartment" <?php if($row['Type_Lg']=="Apartment"){?>selected<?php }?> >Apartment</option>
                <option value="Villa" <?php if($row['Type_Lg']=="Villa"){?>selected<?php }?> >Villa</option>
                <option value="Building" <?php if($row['Type_Lg']=="Building"){?>selected<?php }?>>Building</option>
                <option value="House" <?php if($row['Type_Lg']=="House"){?>selected<?php }?>>House</option>
                                </select>
                             
            

                <br/>

                <label style="color:#999; font-size:20px;">Price:</label>
				<input  type="number" class="form-control"  name="prix" value="<?php echo $row['Prix_Lg']; ?>" placeholder="<?php echo $row['Prix_Lg']; ?>" style="height: 50px;">
                <br/>

                <label style=" color:#999; font-size:20px;">Address:</label>
                <input type="text" class="form-control" name="add_lg" value="<?php echo $row['adress_Lg']; ?>" placeholder="<?php echo $row['adress_Lg']; ?>"  style="height: 50px;">
				<br/>

                
                <label style=" color:#999; font-size:20px;">Descriptoin:</label>
                <input type="text" class="form-control" name="desc_lg" value="<?php echo $row['Description_Lg']; ?>" placeholder="<?php echo $row['Description_Lg']; ?>" style="height: 50px;">
				<br/>
                
                <label style=" color:#999; font-size:20px;">Bed Rooms:</label>
                <input type="number" class="form-control" name="Bedroom" value="<?php echo $row['chambres']; ?>" placeholder="<?php echo $row['chambres']; ?>" style="height: 50px;">
				<br/>

                <label style=" color:#999; font-size:20px;">Bathroom:</label>
                <input type="number" class="form-control" name="Bathroom" value="<?php echo $row['Toilet']; ?>" placeholder="<?php echo $row['Toilet']; ?>"  style="height: 50px;">
				<br/>

                <label style=" color:#999; font-size:20px;">Kitchen:</label>
                <input type="number" class="form-control" name="kitchen" value="<?php echo $row['cuisines']; ?>" placeholder="<?php echo $row['cuisines']; ?>" style="height: 50px;">
				<br/>

                <label style=" color:#999; font-size:20px;">Latitude:</label>
                <input type="number" class="form-control" name="largeur" value="<?php echo $row['Largeur_Lg']; ?>" placeholder="<?php echo $row['Largeur_Lg']; ?>" style="height: 50px;">
				<br/>

                <label style=" color:#999; font-size:20px;">Longitude:</label>
                <input type="number" class="form-control" name="longeur" value="<?php echo $row['Longeur_Lg']; ?>" placeholder="<?php echo $row['Longeur_Lg']; ?>" style="height: 50px;">
				<br/>


                <!-- Aid -->
                <input type="hidden" name="Lg_id" value="<?php echo $row['Lid']; ?>">

                <label style="color:#999; font-size:20px;">Image:</label>
                <br/>
                <img  name="old_img" src="/Logement/<?php echo $row['image_Lg']; ?>" height="100" width="100">
                <br/>
                <br/>

                <input type="file" name="image" >
                <br/>
                <br/>
				                        
                   <button type="submit" class="btn btn-primary" name="submit" style="float: right;">Edite</button>
        </form>

                   </div>
                 </div>
             </div>
</div>



          <?php }?>


</table>

</div>
                         <!-- Change password-->
				<?php    include('Change_pass_Admn.php'); ?>


            <!-- 3 footer -->


            <br/><br/><br/><br/><br/>
            <br/><br/><br/><br/><br/><br/><br/><br/>
            <br/><br/><br/><br/>
            <br/><br/><br/><br/>
            <div class="footer"style="margin-bottom:-500px;">
                
            <p style="bottom: 0px; background:url('pp.jpg'); width:100%; height:70px;"><span class=" glyphicon glyphicon-bullhorn "  style="color:#999 ">  My home commnty</span>  <img src="Log 3.jpeg"  style="width:70px; height:70px; float:right;"alt=""></p>		
            </div>


            </body>
            </html>