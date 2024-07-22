<?php
session_start();
include_once "Config.php";

include_once "Components/Navls.php";    


if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user_list WHERE email = '$email' AND password = '$password'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["username"] = $row["Name"];
        header("location: Home.php");
    } else {
        echo "sorry your account is not available";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Login.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <form accept="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">Email</span>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Password</span>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Log In</button>
        </form>
        <a href="Signup.php" class="nav-link fw-bold">Sign Up</a>

    <h2>
    <?php  if(isset($_SESSION["useremail"])) {
            $_SESSION["useremail"]; 
        }
        ?>
    </h2>
    </div>

</body>
</html>