<?php
include 'config.php';
session_start();
$msg = '';

if (isset($_SESSION['user_name']) && isset($_SESSION['account_type']) && $_SESSION['account_type'] == 'ADMIN') {
    header('location: dashboard.php');
}

if (isset($_POST['submit'])) {
    if (isset($_POST['admin']) && isset($_POST['psw'])) {
        $user_name = $_POST['admin'];
        $password = md5($_POST['psw']);
        $sql = "SELECT * FROM `user` WHERE `email`='$user_name' AND `password` ='$password'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if ($rows > 0) {
            $response = mysqli_fetch_array($result);
            $_SESSION['user_name'] = $response['user_name'];
            $_SESSION['id'] = $response['id'];
            $_SESSION['email'] = $response['email'];
            $_SESSION['account_type'] = $response['account_type'];
            if ($_SESSION['account_type'] == 'ADMIN') {
                header('location: dashboard.php');
            }else{
                $msg = '<span class="text-danger">Your are not admin</span>';
            }

        } else {
            $msg = '<span class="text-danger">Invalid credentials</span>';
        }
    }


}

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>template</title>
<style>

    .container {
        width: 500px;
        height: 250px;
        padding: 16px;
    }
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    form {
        border: 3px solid #f1f1f1;
    }

    input[type=text], input[type=password]
    {
        width:90%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color:red;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 90%;
    }

    button:hover {
        opacity: 0.8;
    }

    span {
        float:left;
        padding-top: 16px;
    }
</style>
</head>
<body>
<div class="container">
    <h2 style="text-align: center"> Admin login </h2>

<form action="" method="post" name="login">

    <div class="container">
        <label><b>your name</b></label>
        <input type="text" placeholder="your user name" id="user_name" name="admin" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
        <button type="submit" name="submit" value="login" >login</button>
        <span><?php echo $msg;?></span>
    </div>
</form>
</div>

</body>
</html>

