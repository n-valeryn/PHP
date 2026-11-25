<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $rol = $_GET['user_rol'] ?? null;


        

        if (!isset($_SESSION['user_logged'] )) {

            header("Location: dashboard.php");
            exit();

        }
        else {
            header("Location: login.php");
            exit();
        }
    }
    else {
        
    }
    
?>