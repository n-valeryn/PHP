<?php

session_start();
if (isset($_SESSION["user_loggeado"])){
    header("Location: ./dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <section class="formulario-login">
    <form action="middleware.php" method="POST">

        <div class="form-div">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        </div>

        <div class="form-div">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        </div>

        <div class="form-div">
        <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
    </section>

</body>
</html>