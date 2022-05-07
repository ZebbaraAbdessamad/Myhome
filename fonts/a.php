<?php
if(isset($_POST['Img'])){
    $sql="Update agents set name ='".$name."', email ='".$email."',address ='".$Address."', description='".$description."' , image ='".$image."', tele='".$tele."' where email='". $_SESSION['email']."' ";
    } 

?>