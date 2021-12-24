<?php

    //aktifkan session
    session_start();

    if(isset($_SESSION['id'])){
        session_destroy();
    }
        header("location:formLogin.php");
?>