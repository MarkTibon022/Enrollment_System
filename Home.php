<?php
session_start();
    include_once "Config.php";
    include_once "Components/Nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Home.css">
    <title>Document</title>
</head>
<body>
    <div class="home">
        <h1><?php echo "Welcome to College School ".$_SESSION["username"]; ?></h1>
    </div>
</body>
</html>