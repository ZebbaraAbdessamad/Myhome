<?php
 include('Connection_Admin.php'); 


$Title=$_POST['Titre-Lg'];
$Pr_class=$_POST['genre-Lg'];
$Address=$_POST['adress-Lg'];
$Description=$_POST['Description-Lg'];
$Price=$_POST['Prix-Lg'];
$Longitude=$_POST['Longeur-Lg'];
$Latitude=$_POST['Largeur-Lg'];
$Bed_Rooms=$_POST['chambres'];
$kitchen=$_POST['cuisines'];
$Bathroom=$_POST['Toilet'];
$Pr_Type=$_POST['Type-Lg'];
$image=$_POST['image_Lg'];
$image1=$_POST['image1'];
$image2=$_POST['image2'];
$image3=$_POST['image3'];

session_start();
 $sql="insert into logements (Titre_Lg , genre_Lg, adress_Lg ,Description_Lg , Prix_Lg ,Longeur_Lg, Largeur_Lg, chambres ,cuisines ,Toilet ,Type_Lg , image_Lg, Date_Lg ,Etat_Lg, Aid )
 values ('$Title', '$Pr_class','$Address','$Description' ,'$Price' ,'$Longitude','$Latitude' ,'$Bed_Rooms' ,'$kitchen','$Bathroom' ,'$Pr_Type', '$image' ,Now(),'0','". $_SESSION['Aid']."') ";
 $result=mysqli_query($connect,$sql);

 $sql1="select Max(Lid) as id from logements";
 $result1=mysqli_query($connect,$sql1);
 foreach($result1 as $r){
   $sql2="insert into images (Lid,image) values( ".$r['id'].",'$image1')";
   $result2=mysqli_query($connect,$sql2);
   $sql3="insert into images (Lid,image) values( ".$r['id'].",'$image2')";
   $result3=mysqli_query($connect,$sql3);
   $sql4="insert into images (Lid,image) values( ".$r['id'].",'$image3')";
   $result4=mysqli_query($connect,$sql4);
 }


 if(!$result){
    echo"<script> alert('error') </script>";
  }
  else{
      session_start();
     header('location:Add_property.php');
$_SESSION['Add_Pr']='The property has been Successfuly added ';
     exit();
    
  }
?> 