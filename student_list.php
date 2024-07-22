<?php
    include_once "Config.php";
    include_once "Components/Nav.php";

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
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php do {?>
    <tr>
      <td><?php echo $row["Id"]; ?></td>
      <td><?php echo $row["Name"]; ?></td>
      <td><?php echo $row["Phone"]; ?></td>
      <td><?php echo $row["Email"]; ?></td>
      <td><a href="Account.php?ID=<?php echo $row["Id"]; ?>">aa</a></td>

    </tr>
    <?php } while ($row = $result->fetch_assoc()); ?>
    <tr>
</table>
</body>
</html>