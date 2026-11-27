<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = $_POST['username'];
        $passwd = $_POST['password'];
        
        include_once "data.php";
        
        $user_exists = false;
        $passwd_correct = false;
        $rol = "";

        foreach ($usuarios as $u) {
            if($u["username"] == $name){
                $user_exists = true;
                if($u["password"] == $passwd) {
                    $passwd_correct = true;
                    $rol =  $u['rol'];
                }
            }
        }


        if (count($usuarios)>0 && $user_exists){
            if ($passwd_correct){
                
                $_SESSION["user_loggeado"] = $name;
                $_SESSION["user_rol"] = $rol;
                header("Location: dashboard.php");
                exit();

            } else {
                header("Location: login.php?error=passwd-incorrect");
                exit();
            }

        } else {
            header("Location: login.php?error=user-inexistent");
            exit();
        }
        

    } else {
        header("Location: index.php");
        exit();
    }
    
?>