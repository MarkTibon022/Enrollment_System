<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "user_data";

$con = new mysqli($host, $username, $password, $db);
    if ($con->connect_error) {
        die ("bad ".$con->connect_error);
    }
?>