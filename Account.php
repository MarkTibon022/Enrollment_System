<?php
include_once "Config.php";
include_once "Components/Nav.php";

$ID = $_GET["ID"];

$sql = "SELECT * FROM user_list WHERE Id = '$ID' ";
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();

if (isset($_POST["comfim"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "UPDATE  user_list SET Name = '$name', Phone = '$password', Email = '$email', Password = '$password' WHERE Id = '$ID'";
    $result = $con->query($sql) or die ($con->error);

    header("location: Home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Account.css">
    <title>Document</title>
</head>
<body>
    <div class="account">
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">Name</span>
                <input type="text" name="name" class="form-control" value="<?php echo $row["Name"]; ?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Phone No.</span>
                <input type="text" name="phone" class="form-control" value="<?php echo $row["Phone"]; ?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Email</span>
                <input type="text" name="email" class="form-control" value="<?php echo $row["Email"]; ?>">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Password</span>
                <input type="text" name="password" class="form-control" value="<?php echo $row["Password"]; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="comfim">Comfirm</button>
        </form>
        <form action="Delete.php" method="post">
                <button type="submit" name="del" class="btn btn-danger">Delete</button>
                <input type="hidden" name="ID" value="<?php echo $row["Id"]; ?>">
            </form>
    </div>
</body>
</html>