<?php
    
    session_start();
    if(!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
        header("Location: ./login.php");
        exit();
    }
    
    if(isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    } else {
        $username = $_SESSION['username'];
    }
