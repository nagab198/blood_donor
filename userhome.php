<?php

session_start();
$name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>template</title>
    <style>

    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Blood-donor management</a>
        </div>
        <ul class="nav navbar-nav" style="margin-left: 890px;">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="user_profile.php">my profile</a></li>
            <li><a href="signup.php">Sign up</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="login.php"> <?php echo "Welcome ".$name?></a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </div>
</nav>


</body>
</html>