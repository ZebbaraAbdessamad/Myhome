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
                  <div class="container">
                  <div class="spacer agents">
 <?php
                include('connectionBD.php');

                  $sql="select * from agents ";
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
                                          
                                          $sql= "select * from agents where status='1' LIMIT $offset, $rec_limit";
                                          $sel =$connect->query($sql);

?>

                 <div class="row">
                   <div class="col-lg-8  col-lg-offset-2 col-sm-12">
                          <?php while($data=$sel->fetch(PDO::FETCH_ASSOC))
                          {
                            ?>
                      <div class="row" style="margin-bottom:25px;">
                          
                                <div class="col-lg-2 col-sm-2 "><img src="/Logement/image-Agent/<?php echo $data['image']; ?>" class="img-responsive"   style="width: 100px;height: 100px;  border-radius:5px ;"></div>

                                <div class="col-lg-7 col-sm-7 "><h4><?php echo $data['Name']; ?></h4><p><?php echo stripslashes($data['description']); ?></p></div>
                                
                                <div class="col-lg-3 col-sm-3 " ><span class="glyphicon glyphicon-envelope"></span> <span style="color:lightcoral; display:inline-flex; font-size:15px;">Email:</span>    <a style="color: rgb(4, 170, 73);" href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?>             </a><br>
                                <span class="glyphicon glyphicon-earphone" ></span> <span style="color:lightcoral; display:inline-flex; font-size:15px;"> Phone Number:  </span><span  style="color: rgb(4, 170, 73);"><?php echo $data['Tele']; ?></span></div>
                    </div>
                              <?php
                              echo"<br/>";
                              echo"<br/>";
                          }
			if( $left_rec > $rec_limit && $page != 0 )
			{
			
			   $last = $page - 2;
			   echo "<a class=\"pagination_button\" href=\"Agents-Ag.php?page=$last\">Previous</a> |";
			   echo "<a class=\"pagination_button\" href=\"Agents-Ag.php?page=$page\">Next</a>";
			}
			if( $page == 0 )
			{
			  
			   echo "<a class=\"pagination_button\" href=\"Agents-Ag.php?page=$page\">Next</a>";
			}
			if($left_rec <= $rec_limit) 
			{
			   $last = $page - 2;
			   echo "<a class=\"pagination_button\" href=\"Agents-Ag.php?page=$last\">Previous</a>";
			}

	?>
    
      
     
  </div>
</div>


</div>
</div>



<br/>
<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>



<!-- change password-->
<?php include('change_Password.php')?>
  

   <!-- 5eme buttom Iformations-->
   <?php include('footer_Agent.php')?>


</body>
</html>






