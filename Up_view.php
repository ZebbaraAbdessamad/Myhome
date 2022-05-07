<?php    
       echo 'hhh';
        include('connectionBD.php'); 
         
             $Title=$_POST['title'];
             $Pr_class=$_POST['genre-Lg'];
             $Address=$_POST['add_lg'];
             $Description=$_POST['desc_lg'];
             $Price=$_POST['prix'];
             $Longitude=$_POST['longeur'];
             $Latitude=$_POST['largeur'];
             $Bed_Rooms=$_POST['Bedroom'];
             $kitchen=$_POST['kitchen'];
             $Bathroom=$_POST['Bathroom'];
             $Pr_Type=$_POST['Type_Lg'];
             $image =$_POST['image'];
            //  $Aid=$_POST['id_Ag'];
             $Lg_id=$_POST['Lg_id'];
            
 
                    if(isset($_POST['submit']))
                    {
     
                    if($_POST['image'])
                    {  
                    $sql="UPDATE logements SET Titre_Lg ='".$Title."', image_Lg ='".$image."',Description_Lg ='".$Description."', Prix_Lg='".$Price."', Longeur_Lg ='".$Longitude."',Largeur_Lg='".$Latitude."' , genre_Lg='".$Pr_class."', chambres='".$Bed_Rooms."', cuisines ='". $kitchen."', Toilet='".$Bathroom."', Type_Lg ='". $Pr_Type."', adress_Lg='".$Address."' where  Lid=$Lg_id";
                    $result=$connect->query($sql);
                    header('location:View_property.php');
               
                  
                    }
                    else
                    {  
                    $sql="Update logements set Titre_Lg ='".$Title."',Description_Lg ='".$Description."', Prix_Lg='".$Price."', Longeur_Lg ='".$Longitude."',Largeur_Lg='".$Latitude."' , genre_Lg='".$Pr_class."', chambres='".$Bed_Rooms."' ,cuisines ='". $kitchen."', Toilet='".$Bathroom."', Type_Lg ='". $Pr_Type."', adress_Lg='".$Address."' where  Lid=$Lg_id";
                    $result=$connect->query($sql);
                    header('location:View_property.php');
                    }
                    
                   
                }
                   ?>
                











