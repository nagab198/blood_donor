<?php
include 'admin/config.php';
$error = null;
$psw = null;
$repsw = null;
$psw_error = null;
$uname_error = null;
$email_error = null;
$blood_grp_error = null;
$age_error = null;

if (isset($_POST['submit'])) {
    if (isset($_POST['uname']) && $_POST['uname'] != '') {
        $uname = $_POST['uname'];
    } else {
        $uname_error = "please enter a username";
    }
    if (isset($_POST['email']) && $_POST['email'] != '') {
        $email = $_POST['email'];
    } else {
        $email_error = "please enter a email address";
    }
    if (isset($_POST['age']) && $_POST['age'] != '') {
        $age = $_POST['age'];
    } else {
        $age_error = "please enter a email address";
    }
    if (isset($_POST['blood_grp']) && $_POST['blood_grp'] != '') {
        $blood_grp = $_POST['blood_grp'];
    } else {
        $blood_grp_error = "enter select blood group";
    }
    if (isset($_POST['psw']) && $_POST['psw'] != '') {
        $psw = md5($_POST['psw']);
    } else {
        $psw_error = "please enter password";
    }
    if (isset($_POST['repsw']) && $_POST['repsw'] != '') {
        $repsw = md5($_POST['repsw']);
    } else {
        $repsw_error = "please enter repeat password";
    }
    if ($psw !== $repsw) {
        $error = "password not match";
    }
    if ($error == null && $uname_error == null && $psw_error == null && $email_error == null && $blood_grp_error == null && $age_error == null) {
        $sql = "INSERT INTO `user`(`user_name`, `email`, `age`, `blood_group`, `account_type`, `password` ) VALUES ('$uname','$email','$age','$blood_group','USER','$psw')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            header('location: login.php');
        } else {
            $error = "unable to insert";
        }
    }

}
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
            height: 650px;
            padding: 16px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 90%;
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

        #wrapper {
            padding-left: 70px;
            transition: all .4s ease 0s;
            height: 100%
        }

        #sidebar-wrapper {
            margin-left: -150px;
            left: 70px;
            width: 150px;
            background: #222;
            position: fixed;
            height: 100%;
            z-index: 10000;
            transition: all .4s ease 0s;
        }

        .sidebar-nav {
            display: block;
            float: left;
            width: 150px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #page-content-wrapper {
            padding-left: 0;
            margin-left: 0;
            width: 100%;
            height: auto;
        }

        #wrapper.active {
            padding-left: 150px;
        }

        #wrapper.active #sidebar-wrapper {
            left: 150px;
        }

        #page-content-wrapper {
            width: 100%;
        }

        #sidebar_menu li a, .sidebar-nav li a {
            color: #999;
            display: block;
            float: left;
            text-decoration: none;
            width: 150px;
            background: ghostwhite;
            border-top: 1px solid #373737;
            border-bottom: 1px solid #1A1A1A;
            -webkit-transition: background .5s;
            -moz-transition: background .5s;
            -o-transition: background .5s;
            -ms-transition: background .5s;
            transition: background .5s;
        }

        .sidebar_name {
            padding-top: 25px;
            color: #fff;
            opacity: .7;
        }

        .sidebar-nav li {
            line-height: 40px;
            text-indent: 20px;
        }

        .sidebar-nav li a {
            color: white;
            display: block;
            text-decoration: none;
        }

        .sidebar-nav li a:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
            text-decoration: none;
        }

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav > .sidebar-brand {
            height: 65px;
            line-height: 60px;
            font-size: 18px;
        }

        .sidebar-nav > .sidebar-brand a {
            color: white;
        }

        .sidebar-nav > .sidebar-brand a:hover {
            color: skyblue;
            background: none;
        }

        #main_icon {
            float: right;
            padding-right: 65px;
            padding-top: 20px;
        }

        .sub_icon {
            float: right;
            padding-right: 65px;
            padding-top: 10px;
        }

        .content-header {
            height: 65px;
            line-height: 65px;
        }

        .content-header h1 {
            margin: 0;
            margin-left: 20px;
            line-height: 65px;
            display: inline-block;
        }

        @media (max-width: 767px) {
            #wrapper {
                padding-left: 70px;
                transition: all .4s ease 0s;
            }

            #sidebar-wrapper {
                left: 70px;
            }

            #wrapper.active {
                padding-left: 150px;
            }

            #wrapper.active #sidebar-wrapper {
                left: 150px;
                width: 150px;
                transition: all .4s ease 0s;
            }
        }


    </style>
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
        });
    </script>

</head>
<body>

<div class="container">
    <h2 style="text-align: center;">signup Form</h2>

    <form action="" method="post" style="border-radius: 90px 0px 90px 0px;">

        <div class="container">
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" style="border-radius: 50px;">
            </div>
            <label for="uname"><b>your name</b></label>
            <input type="text" placeholder="Enter your name" id="uname" name="uname" required>
            <label for="email"><b>User email</b></label>
            <input type="text" placeholder="Enter your email" id="email" name="email" required>
            <br>
            <label for="age"><b>Age</b></label>
            <br>
            <input type="number" placeholder="Enter your age" id="age" name="age" required>
            <label for="blood_grp">BLOOD GROUPS </label>
            <select class="form-control" id="blood_grp" name="blood_grp" style="width: 60px;">
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option VALUE="O+">O+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O-">O-</option>
            </select>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="*******" id="psw" name="psw" required>

            <label for="repsw"><b> Repeat Password</b></label>
            <input type="password" placeholder="*******" id="repsw" name="repsw" required>

            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>


</body>
</html>