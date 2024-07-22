<?php
include_once "Config.php";

include_once "Components/Navls.php";

if (isset($_POST["signup"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $checkemail = "SELECT * FROM user_list WHERE email = '$email'";
    $result = $con->query($checkemail);
    if ($result->num_rows > 0) {
        echo "sorry your email not avalable";
    } else {
        $sql = "INSERT INTO `user_list`( `Name`, `Phone`, `Email`, `Password`) VALUES ('$name','$phone','$email','$password')";
        if($con->query($sql) == TRUE) {
            header("location: index.php");
        } else {
            echo "error ".$con->error;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Signup.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">Name</span>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Phone No.</span>
                <input type="number" name="phone" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Email</span>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Password</span>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
        </form>
        <a href="index.php" class="nav-link fw-bold">Log In</a>
    </div>
</body>
</html>