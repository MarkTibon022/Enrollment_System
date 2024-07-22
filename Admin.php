<?php
include_once "Components/Nav.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Admin.css">
    <title>Document</title>
</head>
<body>
    <div class="admincon">
       <form action="" class="w-100">
            <div class="input-group mb-3 ">
                <span class="input-group-text" for="yname">Your Name</span>
                <input t-groupype="text" id="yname" class="form-control bg-body-tertiary" placeholder="Mark Dev" name="yname">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" for="yemail">Your Email</span>
                <input t-groupype="text" id="yname" class="form-control" placeholder="markdev@gmail.com" name="yemail">
            </div>
            <div class="input-group mb-3 lg-p-5">
                <span class="input-group-text" for="message">message</span>
                <textarea t-groupype="text" id="yname" class="form-control" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>
</html>