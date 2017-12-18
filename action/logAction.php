<?php

    action();

    function action() {
        if(isset($_REQUEST['action'])) {
            switch($_REQUEST['action']) {
                case "login" :
                    login();
                    break;
                case "logout" :
                    logout();
                    break;
            }
        }
    }

    function login() {
        if(isset($_POST['username'])) {
            $username = $_POST['username'];
        }
        if(isset($_POST['password'])) {
            $password = $_POST['password'];
        }
        
        if($username === "admin" && $password === "admin") {
            session_start();
            if(isset($_SESSION['loginerror'])) {
                unset($_SESSION['loginerror']);
            }
            $_SESSION['username'] = $username;
            
            if(isset($_POST['save_me'])) {
                setcookie("username", $username, time() + 7*24*60*60, "/");
            } else {
                setcookie("username", $username, time() - 1, "/");
            }
            header("Location: ../index.php");
        } else {
            session_start();
            $_SESSION['loginerror'] = true;
            header("Location: ../login.php");
        }
    }
    
    function logout() {
        if(isset($_COOKIE['username'])) {
            setcookie("username", $_SESSION['username'], time() - 1, "/");
        }
        session_start();
        if(isset($_SESSION['username'])) {
            unset($_SESSION['username']);
        }
        header("Location: ../login.php");
    }

