<?php


// session_start();
// if(isset( $_SESSION['email'])){
//     echo"<script>location.href='Page_Login_Admn.php'</script>";
// session_destroy();
// unset($_SESSION['email']);

// }
//     else{
//         echo"<script>location.href='Page_Login_Admn.php'</script>";
//     }

session_start();
if(session_destroy()){

echo"<script>location.href='Page_Login_Admn.php'</script>";
}
else{
    echo"<script>location.href='Page_Login_Admn.php'</script>";

}

?>