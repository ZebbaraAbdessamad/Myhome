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



     <!-- 3eme Add Proprety-->


      <div class="container">

         <?php if(isset($_SESSION["Add_p"]) ){?>  
            <div class="alert alert-success">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <?php echo $_SESSION["Add_p"];  ?>						</div>   
                           <?php  unset($_SESSION['Add_p']); }  ?>  

      <div class="spacer">	
      <div class="row register">	
      <div class="col-lg-12 ">		




                      <!-- <script >
                      var count = 1;
                              $(function(){
	                            $('p#add_field').click(function(){
	                          	count += 1;
	                          	if(count <=10)
	                            	{
         $('#addcontainer').append(	'<label style="padding-top:10px; margin-left:-140px; ">Select Image ' 
          + count + '</label>  <input id="catalog_image' + count + '" name=image+ count "' + '" value="" type="file" /><p />'  );
		}
		else
		{
			alert("Maximum 10 images you can add..");
		}
	});
});
   </script>   -->
  

        <div class="box-content">
   
       
                     <form action="Addition-Proprty.php" method="POST"  >
                     <br/>
  <div class="row">
               
                  <div class="col-md-4"> 
                  <label style="font-weight:bold;" >   <h5>   <span style="color:red;">  *</span> Property title:</h5> </label>
                  <br/>
                  <input type="text" class="form-control"  required="required" placeholder="Property Title" name="Titre-Lg" style="height:65px; width:100%; margin-top:23px;"><br/>      
                   <br/>
                  </div>

                  <div class="col-md-4"> 
                  <label style="font-weight:bold;" >   <h5>   <span style="color:red;">  *</span> Property class:</h5> </label>
                                 <br/>
                                 <br/>
                              <select class="form-control"  required="required" name="genre-Lg" style="height:65px; width:100%;">
                                 <option value="Buy">Buy</option>
                                 <option value="Rent">Rent</option>
                              </select>
                              <br/>
                  </div>

                  <div class="col-md-4"> 
                  <label style="font-weight:bold;" >  <h5>  <span style="color:red;">   *</span> Property Type:</h5> </label>
                                             <br/>
                                             <br/>
                                          <select class="form-control"  required="required" name="Type-Lg" style="height:65px; width:100%">
                                                <option value="Apartment">Apartment</option>
                                                <option value="Villa">Villa</option>
                                                <option value="Building">Building</option>
                                                <option value="House">House</option>
                                          </select>
                                          <br/>
                  </div>

                   <div class="col-md-6">             
                   <label style="font-weight:bold;" > <h5>  <span style="color:red;">   *</span> Address: </h5></label>
                           <br/>
                           <br/>

                           <textarea class="form-control"  required="required" placeholder="Address" name="adress-Lg" style="height:65px; width:100%;"></textarea>
                           <br/>
                   </div>     
                           
                   <div class="col-md-6"> 
                   <label style="font-weight:bold;" > <h5>   <span style="color:red;">   *</span>  Price: </h5></label>
                           <br/>
                           <br/>
                           <input type="number" class="form-control"  required="required" name="Prix-Lg" placeholder="Price" style="height:65px; width:100%;">
                           <br/>
                   </div>
                   <div class="col-md-12"> 
                   <label style="font-weight:bold;" >        <h5>  <span style="color:red;">   *</span> Descriptoin:</h5> </label>
                           <br/>
                           <textarea rows="6" class="form-control"  required="required" placeholder="Descriptoin" name="Description-Lg"></textarea>
                           <br/>
                   </div>         

                   <div class="col-md-4"> 
                   <label style="font-weight:bold;" > <h5>    <span style="color:red;">   *</span>  Bed Rooms: </h5></label>
                           <br/>
                           <br/>
                           <input type="number" class="form-control"  required="required" name="chambres" placeholder="Bed Rooms" style="height:65px; width:100%;">
                           <br/>
                   </div>
                   <div class="col-md-4">        
                   <label style="font-weight:bold;" > <h5> <span style="color:red;">   *</span> Bathroom: </h5></label>
                           <br/>
                           <br/>
                           <input type="number" class="form-control"  required="required" name="Toilet" placeholder="Bathroom:" style="height:65px; width:100%;">
                              <br/>
                   </div>
                   <div class="col-md-4">             
                   <label style="font-weight:bold;" >      <h5> <span style="color:red;">   *</span> kitchen: </h5></label>
                           <br/>
                           <br/>
                           <input type="number" class="form-control"  required="required" name="cuisines" placeholder="Kitchen" style="height:65px; width:100%;">
                           <br/>
                   </div>
                   <div class="col-md-6">        
                   <label style="font-weight:bold;" >  <h5>      <span style="color:red;">   *</span> Latitude: </h5> </label>
                           <br/>
                           <br/>
                           <input type="number" name="Largeur-Lg" placeholder="Latitude" class="form-control"  required="required" style="height:65px; width:100%;">
                           <br/>
                   </div>
                   <div class="col-md-6">       
                   <label style="font-weight:bold;" ><h5><span style="color:red;">   *</span>   Longitude: </h5></label>
                           <br/>
                           <br/>
                           <input type="number" name="Longeur-Lg" placeholder="Longitude" class="form-control"  required="required"  style="height:65px; width:100%;">
                   </div>
                     
               <br/>
                           
               <label style="font-weight:bold;" >    <h5> <span style="color:red;">   *</span>  Images: </h5></label> 
                           <br/>
                           <br/>

                                          <div class="col-md-6">
                                             <label style="font-size:16px; color:#999;">Principal image:</label> 
                                             <input type="file" name="image_Lg"  required  class="text-long" >
                                             <br/>  		
                                             <br/>
                                          </div>
                                          <div class="col-md-6">    
                                             <label style="font-size:16px; color:#999;"> kitchen image:</label> 
                                             <input type="file" name="image1"  required  class="text-long" >
                                             <br/>
                                             <br/>
                                          </div>
                           <br/>

                           <div class="col-md-6">
                                          <label style="font-size:16px; color:#999;">Bathroom image:</label> 
                              <input type="file" name="image2"  required  class="text-long" >
                              <br/>  		
                              <br/>
                           </div>
                           <div class="col-md-6">
                              <label style="font-size:16px; color:#999;"> Bedroom image:</label> 
                              <input type="file" name="image3"  required  class="text-long" >
                              <br/>
                              <br/>
                            </div>
                           <br/>
                        <button type="submit" class="btn btn-success container" name="Submit" style=" width:100%;">Add</button>
               
                           <br/>
       </div>                    
        </form>
      </div>
  
</div>
</div>
</div>
</div>

<br/>
        <!--  change password-->
        <?php include('change_Password.php')?>

   <!-- 5eme buttom Iformations-->
   <?php include('footer_Agent.php')?>
 
</body>
</html>