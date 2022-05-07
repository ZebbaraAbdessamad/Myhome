<?php
 include('connectionBD.php'); 


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
$image3=$_POST['image3'];
$image2=$_POST['image2'];

session_start();
 $sql="insert into logements (Titre_Lg , genre_Lg, adress_Lg ,Description_Lg , Prix_Lg ,Longeur_Lg, Largeur_Lg, chambres ,cuisines ,Toilet ,Type_Lg  , image_Lg, Date_Lg ,Etat_Lg,  Aid )
 values ('$Title', '$Pr_class','$Address','$Description' ,'$Price' ,'$Longitude','$Latitude' ,'$Bed_Rooms' ,'$kitchen','$Bathroom' ,'$Pr_Type', '$image' ,Now(),'0','".$_SESSION['Aid']."') ";
 $result=$connect->query($sql);
 
 $sql1="select Max(Lid) as id from logements";
 $result1=$connect->query($sql1);
 foreach($result1 as $r){
   $sql2="insert into images (Lid,image) values( ".$r['id'].",'$image1')";
   $result2=$connect->query($sql2);
   $sql3="insert into images (Lid,image) values( ".$r['id'].",'$image2')";
   $result3=$connect->query($sql3);
   $sql4="insert into images (Lid,image) values( ".$r['id'].",'$image3')";
   $result4=$connect->query($sql4);
 }
 if(!$result){
    echo"<script> alert('error') </script>";
  }
  else{
     echo"<script> alert('insription terminer') </script>";  
     header('location:AddProprety.php');
     $_SESSION['Add_p']='The property has been successfully added';
     exit();
    
  }
?> 