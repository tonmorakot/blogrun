<?php 
    session_start();

    if($_SESSION["status"] == "admin") {
      session_unset();
      session_destroy(); 
      header("Location: ../index.php");
    } else if($_SESSION["status"] == "user") {
      session_unset();
      session_destroy(); 
      header("Location: ./index.php");
    }

?>
