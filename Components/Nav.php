<?php
    include_once "Config.php";

    $sql = "SELECT * FROM user_list";
    $result = $con->query($sql) or die ($con->error);
    $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Nav.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light">
        <a href="" class="navbar-brand text-uppercase">college school</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#show">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="show">
        <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="Home.php" class="nav-link active text-capitalize">home</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="Account.php?ID=<?php echo $row["Id"]; ?>" class="nav-link active text-capitalize">Account</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="student_list.php" class="nav-link active text-capitalize">Student list</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="Admin.php" class="nav-link active text-capitalize">Contact admin</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="Lagout.php" class="nav-link active text-capitalize">lag out</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
<script src="Css/Lib/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</html>