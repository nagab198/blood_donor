<?php
include 'dashboard.php';
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
            background-color: #04AA6D;
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

        .cancelbtn {
            width: 90%;
            padding: 10px 18px;
            background-color: #f44336;
        }

        span.psw {
            float:left;
            padding-top: 16px;
        }

            .cancelbtn {
                width:90%;
            }
        }
    </style>
</head>
<body>
<br><br><br>
<div class="container">
<h2>Login Form</h2>

<form action="#" method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

        <button type="submit">Login</button>
    </div>

    <div class="container">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="forgot.html">password?</a></span>
    </div>
</form>
</div>


</body>
</html>