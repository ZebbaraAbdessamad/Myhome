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

<br/>
<br/>
<br/>
<br/>


                        <!-- 3 agents -->


                     <?php
                        include('connectionBD.php');

                        $sql="select * from agents,logements where agents.Aid=logements.Aid and agents.email='". $_SESSION['email']."' ";
                        $result=$connect->query($sql);
                        
                        ?>


        <div class="container">

        <div style="background-color: #999; font-size: 15px; padding: 5px; padding-left:10px; color:white;text-align:center;
  margin-top:-85px; margin-bottom:45px; height:50px; border-radius:10px; width:50%;margin-left:300px;">
                             <h3>My Property</h3> 
                                </div>

        <div class="row">
        <div class="row justify-content-center">

        <?php 
        $a=1;
        foreach($result as $row){
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
                                <div style="display: flex-block;">
                            <a href="" data-toggle="modal" data-target="#log_<?php echo $row['Lid']; ?>" class="btn btn-success"> Demand</a>
                            <a href="View_property.php?property_id=<?php echo $row['Lid'];?>" class="btn btn-danger" onClick="return confirm('Delete this property?')"> Delet</a>
                            <a href=""class="btn btn-primary" data-toggle="modal" data-target="#Edit_<?php echo $row['Lid']; ?>"> Edite</a>
                    </div>
         </div>
    </div>
</div>


<div class="modal" id="Edit_<?php echo $row['Lid']; ?>">
    <div  class="col-md-5 container my-5 " style="width:1000px;" >
        <div class="card" style=" width:1000px; height:auto; margin:20px;" >
                    <div class="card-header text-center" >
                        <h4 class="card-heard" style="color:#999;"> Edite : <?php echo $row['Titre_Lg']; ?> </h4>
                    </div>       
               <div class="card-body" style="height:auto; margin:20px;">
                     <!-- <h5 class="card-title"><h3 style=" text-align-last: center; margin-top:-20px; " class="text-primary">Information</h3> </h5>								 -->
                    <form method="post" action="Up_view.php" >
              <div class="row">
                     <div class="col-md-6">
                            <label style="color:#999; font-size:20px;">Title:</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $row['Titre_Lg']; ?>"  style="height: 50px;">
                                <br/>
                    </div>
                    <div class="col-md-6">
                            <label style="color:#999; font-size:20px;">Property  class:</label> 
                            <select class="form-control" name="genre-Lg" style="height:50px; width:100%">
                                <option value="Buy" <?php if($row['genre_Lg']=="Buy"){?>selected<?php }?> >Buy</option>  
                                <option value="Rent" <?php if($row['genre_Lg']=="Rent"){?>selected<?php }?> >Rent</option>
                            </select>
                                    <br/>
                    </div>
                    <div class="col-md-4">                
                        <label class="control-label" style="color:#999; font-size:20px;">Property Type:</label>
                            <select  class="form-control"  name="Type_Lg" style="height:50px; width:100%">
                                <option value="Apartment" <?php if($row['Type_Lg']=="Apartment"){?>selected<?php }?> >Apartment</option>
                                <option value="Villa" <?php if($row['Type_Lg']=="Villa"){?>selected<?php }?> >Villa</option>
                                <option value="Building" <?php if($row['Type_Lg']=="Building"){?>selected<?php }?>>Building</option>
                                <option value="House" <?php if($row['Type_Lg']=="House"){?>selected<?php }?>>House</option>
                            </select>
                                    <br/>
                    </div>
                    <div class="col-md-4">                
                                <label style="color:#999; font-size:20px;">Price:</label>
                                <input  type="number" class="form-control"  name="prix" value="<?php echo $row['Prix_Lg']; ?>" style="height: 50px;">
                                    <br/>
                    </div>
                    <div class="col-md-4">                
                                <label style=" color:#999; font-size:20px;">Address:</label>
                                <input type="text" class="form-control" name="add_lg" value="<?php echo $row['adress_Lg']; ?>"   style="height: 50px;">
                                    <br/>
                    </div>
                    <div class="col-md-12">              
                                <label style=" color:#999; font-size:20px;">Descriptoin:</label>
                                <textarea rows="5" class="form-control" name="desc_lg" value=""><?php echo $row['Description_Lg']; ?></textarea>
                                    <br/>
                    </div>
                    <div class="col-md-4">               
                                <label style=" color:#999; font-size:20px;">Bed Rooms:</label>
                                <input type="number" class="form-control" name="Bedroom" value="<?php echo $row['chambres']; ?>"   style="height: 50px;">
                                    <br/>
                    </div>  
                    <div class="col-md-4">             
                                <label style=" color:#999; font-size:20px;">Bathroom:</label>
                                <input type="number" class="form-control" name="Bathroom" value="<?php echo $row['Toilet']; ?>"  style="height: 50px;">
                                    <br/>
                    </div>
                    <div class="col-md-4">               
                                <label style=" color:#999; font-size:20px;">Kitchen:</label>
                                <input type="number" class="form-control" name="kitchen" value="<?php echo $row['cuisines']; ?>"style="height: 50px;">
                                        <br/>
                    </div>
                    <div class="col-md-6">                   
                                <label style=" color:#999; font-size:20px;">Latitude:</label>
                                <input type="number" class="form-control" name="largeur" value="<?php echo $row['Largeur_Lg']; ?>" style="height: 50px;">
                                        <br/>
                    </div>
                    <div class="col-md-6">                  
                                <label style=" color:#999; font-size:20px;">Longitude:</label>
                                <input type="number" class="form-control" name="longeur" value="<?php echo $row['Longeur_Lg']; ?>"  style="height: 50px;">
                                        <br/>
                    </div>
                    <div class="col-md-12">
                                <!-- Lid -->
                                <input type="hidden" name="Lg_id" value="<?php echo $row['Lid']; ?>">

                                <label style="color:#999; font-size:20px;">Image:</label>
                                <br/>
                                <img  name="od_img" src="/Logement/<?php echo $row['image_Lg']; ?>" height="200" width="300">
                                    <br/>
                                    <br/>
                                <input type="file" name="image" >
                    </div>  
                            <button type="submit" class="btn btn-primary" name="submit" style="float: right;margin-top:20px;">Save change</button>
              </div>
                   </form>
             </div>
         </div>
    </div>
</div>


        <div class="modal" id="log_<?php echo $row['Lid']; ?>">

          <div  class="col-md-5 container my-5 ">
                <div class="card" style=" width:1000px; height:auto; margin:20px; " >
				      <div class="card-header text-center">
                           <p class="card-text"> <h3 style=" text-align-last: center;height:18px; color:#999;">View Demand</h3> </p>
                       </div>
                 
				 <div class="card-body" style="height:auto; padding-left:20px;">

		                  
				<table  class="table table-striped table-bordered bootstrap-datatable datatable">
                           <thead>
                                <tr style="background-color: rgb(158, 157, 155);">
                                <th> N°</th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Message</th>
                                <th>Address</th>
                                <th>Date</th>
                                </tr>
                             </thead>
        
                <?php    
                $sl= "select * from logements,Commandes where Commandes.Lid=logements.Lid and Commandes.Lid= '".$row['Lid']."'";
                $rel = $connect->query($sl);
                ?> 
                             <?php 
                            foreach($rel  as $data){
                            ?>

                                    <tr>
                                    <td><?php echo $a; $a++; ?> </td>
                                    <td><?php echo $data['name_client']; ?> </td>
                                    <td><?php echo $data['email_client']; ?> </td>
                                    <td><?php echo $data['tele_client']; ?> </td>
                                    <td><?php echo $data['message']; ?> </td>
                                    <td><?php echo $data['address_cl']; ?> </td>
                                    <td><?php echo $data['Date_demand']; ?> </td>
                                            
                                    </tr>
                                            
                            <?php } ?>
                </table>

                             <!-- delete Agent --> 
                        
                         <?php    if(isset($_GET['property_id']))
                                {
                                    
                                    $sl="delete from logements where  Lid='".$_GET['property_id']."'";
                                    $result=$connect->query($sl);
                                    // $_SESSION['delet_property']="Property Delete Successfuly";
                                    echo"<script>location.href='View_property.php'</script>";

                                    exit;
                            
                                }
                            ?>

									
                              
                                  </div>
                                 
                              </div>
                      </div>
                     
                       
                  </div>
<?php } ?>


        </div>
        </div>
        </div>


        <br/> <br/>
      
       
        <br/> <br/>
        <br/> <br/>
        <br/><br/>
        <br/><br/><br/><br/><br/>

        <!-- change password-->
<?php include('change_Password.php')?>
   
   <!-- 5eme buttom Iformations-->
   <?php include('footer_Agent.php')?>


</body>
</html>