<?php
    session_start();

    if(!isset($_SESSION['username'], $_SESSION['id'])){ 
        header("Location: login.php"); 
    }
 ?>