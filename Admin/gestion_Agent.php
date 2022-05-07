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
 if(isset($_SESSION['Amsg'])){ 
						?>
						
            <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" style="font-family: sans-serif; ">×</button>
							<?php echo $_SESSION['Amsg'] ; ?>
						</div>
            	    <?php unset($_SESSION['Amsg']);		
							
					}?>
                    <!-- button Agent -->
 <a  href="Add-Ag.php"><button class="btn btn-warning" style="float: right; margin-bottom:20px;"> <i class=" glyphicon glyphicon-plus-sign"></i> Add New Agents</button></a>
                               
<thead>
                                <tr style="background-color: rgb(158, 157, 155); text-align:center;">
                                <th> N°</th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Address</th>
                                <th>Join Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                                </tr>
                                </thead>

<?php    include('Connection_Admin.php'); 
$sql= "select * from agents";
$sel = mysqli_query($connect,$sql);
?>
<?php 
$a=1;
foreach($sel as $row){
?>
		  <tr>
          <td><?php echo $a; $a++; ?> </td>
          <td><?php echo $row['Name']; ?> </td>
          <td><?php echo $row['email']; ?> </td>
          <td><?php echo $row['Tele']; ?> </td>
          <td><img src="../image-Agent/<?php echo $row['image']; ?>" height="60" width="60"> </td>
          
          <td><?php echo $row['description']; ?> </td>
          <td><?php echo $row['address']; ?> </td>
          <td><?php echo $row['Date_Ag']; ?> </td>
          <td class="center"> 
 
                  <?php if($row['status']=='1'){?>
                       <a href="gestion_Agent.php?Aid_inactive=<?php echo $row['Aid'];?>"> <button type="submit"  class="btn btn-success" name="active">Active</button></a>
										<?php }else{?>
                       <a href="gestion_Agent.php?Aid_active=<?php echo $row['Aid'];?>"> <button type="submit" class="btn btn-danger" name="inactive">Inactive</button></a>
               <?php }?>	
          </td>

        <td class="center"> 
  <a   href="gestion_Agent.php?Edite_Aid=<?php echo $row['Aid'];?>" data-toggle="modal" data-target="#edit_<?php echo $row['Aid']; ?>" class="btn btn-info" name="Edite" >
              <i class="glyphicon  glyphicon-edit"></i>  </a>

               <a class="btn btn-danger" href="gestion_Agent.php?Agent_id=<?php echo $row['Aid'];?>" title="Delete Agent" onClick="return confirm('Delete this Agent?')">
                   <i class="glyphicon  glyphicon-trash"></i> </a>

         </td> 
                           
                            <!-- Activer Agent --> 
                    <?php  if(isset($_GET['Aid_inactive']))
            {  
                $sl="update agents set status='0' where  Aid='".$_GET['Aid_inactive']."'";
                $result=mysqli_query($connect,$sl);
                $_SESSION['Amsg']="Agent Deactive Successfuly";
                echo"<script>location.href='gestion_Agent.php'</script>";
            
                exit;
            }?>
                           
                            <!-- desactiver Agent --> 
                            <?php  if(isset($_GET['Aid_active']))
                {
                
                    $sl="update agents set status='1' where  Aid='".$_GET['Aid_active']."'";
                    $result=mysqli_query($connect,$sl);
                    $_SESSION['Amsg']="Agent Active Successfuly";
                    echo"<script>location.href='gestion_Agent.php'</script>";
                    exit;
                }?>
                          
                          
                          <!-- delete Agent --> 
                        
                            <?php    if(isset($_GET['Agent_id']))
            {
                
                $sl="delete from agents where  Aid='".$_GET['Agent_id']."'";
                $result=mysqli_query($connect,$sl);
                $_SESSION['Amsg']="Agent Delete Successfuly";
                echo"<script>location.href='gestion_Agent.php'</script>";

                exit;
        
            }
                            ?>

   
        
          </tr>

          <div class="modal" id="edit_<?php echo $row['Aid']; ?>">
             <div  class="col-md-5 container my-5 " style="width:1000px;" >
                 <div class="card" style=" width:1000px; height:auto; margin:20px;" >
						
                                    <div class="card-header text-center" >
                                        <h4 class="card-text" style="color:#999;"> <i class=" glyphicon glyphicon-edit"></i>  Edite : <?php echo $row['Name']; ?></h4>
                                    </div>
                          
                   <div class="card-body" style="height:auto; margin:20px;">
                     <h5 class="card-title"><h3 style=" text-align-last: center; margin-top:-20px; " class="text-primary">Information</h3> </h5>
									
		<form method="post" action="Update_Ag.php" role="form">

        <label style="color:#999; font-size:20px;">Full Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['Name']; ?>" placeholder="<?php echo $row['Name']; ?>" style="height: 50px;">
				<br/>

                <label style="color:#999; font-size:20px;">Phone Number:</label>
                <input type="number" class="form-control"  name="Tele" value="<?php echo $row['Tele']; ?>"  placeholder="<?php echo $row['Tele']; ?>"style="height: 50px;">
				<br/>

                <label style="color:#999; font-size:20px;">Email:</label>
				<input type="email" class="form-control"  name="email"   value="<?php echo $row['email']; ?>"  placeholder="<?php echo $row['email']; ?>" style="height: 50px;">
				<br/>

                <label style="color:#999; font-size:20px;">Description:</label>
				<input  type="text" class="form-control"  name="desc" value="<?php echo $row['description']; ?>" placeholder="<?php echo $row['description']; ?>" style="height: 50px;">
                <br/>

                <label style=" color:#999; font-size:20px;">Address:</label>
                <input type="text" class="form-control" name="add" value="<?php echo $row['address']; ?>" placeholder="<?php echo $row['address']; ?>" style="height: 50px;">
				<br/>

                <!-- Aid -->
                <input type="hidden" name="Aid" value="<?php echo $row['Aid']; ?>">

                <label style="color:#999; font-size:20px;">Image:</label>
                <br/>
                <img  name="old_img" src="../image-Agent/<?php echo $row['image']; ?>" height="100" width="100">
                <br/>
                <br/>

                <input type="file" name="image" >
                <br/>
                <br/>
				                        
                   <button type="submit" class="btn btn-primary" name="Submit" style="float: right;">Edite</button>
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

        <br/><br/><br/>
        <br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/>
        <br/><br/><br/><br/>
        <div class="footer"style="margin-bottom:-500px;">
            
        <p style="bottom: 0px; background:url('pp.jpg'); width:100%; height:70px;"><span class=" glyphicon glyphicon-bullhorn "  style="color:#999 ">  My home commnty</span>  <img src="Log 3.jpeg"  style="width:70px; height:70px; float:right;"alt=""></p>		
        </div>


</body>
</html>