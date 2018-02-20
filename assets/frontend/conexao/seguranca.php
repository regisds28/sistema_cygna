<?php        
    session_start();
    if(isset($_SESSION["user_sistema"])){
       header("location:login.php");
    }
?>