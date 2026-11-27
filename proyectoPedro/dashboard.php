<?php

session_start();
if (!isset($_SESSION["user_loggeado"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<?php include_once "partials/header.php"; ?>
    
<h1>SESIÓN INICIADA</h1>
<h2>Bienvenid@, <?= $_SESSION["user_loggeado"];?></h2>

<h3>Rol: <?= $_SESSION["user_rol"] ; ?></h3>

</body>
</html>