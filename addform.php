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
            height: 300px;
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

        span.psw {
            float: left;
            padding-top: 16px;
        }
        #wrapper.active {
            padding-left: 150px;
        }
        #wrapper.active #sidebar-wrapper {
            left: 150px;
        }



        #sidebar_menu li a, .sidebar-nav li a {
            color: #999;
            display: block;
            float: left;
            text-decoration: none;
            width: 150px;
            background:ghostwhite;
            border-top: 1px solid #373737;
            border-bottom: 1px solid #1A1A1A;
            -webkit-transition: background .5s;
            -moz-transition: background .5s;
            -o-transition: background .5s;
            -ms-transition: background .5s;
            transition: background .5s;
        }

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
            background: rgba(255,255,255,0.2);
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
            color:white  ;
        }

        .sidebar-nav > .sidebar-brand a:hover {
            color: skyblue;
            background: none;
        }

        .content-header h1 {
            margin: 0;
            margin-left: 20px;
            line-height: 65px;
            display: inline-block;
        }

        @media (max-width:767px) {
            #wrapper {
                padding-left: 70px;
                transition: all .4s ease 0s;
            }

            #wrapper.active #sidebar-wrapper {
                left: 150px;
                width: 150px;
                transition: all .4s ease 0s;
            }
        }


    </style>
</head>
<body>
<div class="container">
    <h2 style="text-align: center;">Add blood groups</h2>

    <form action="#" method="post" style="border-radius: 50px;">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" id="uname" name="uname" required>
            <br>

            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter email" id="uname" name="uname" required>





            <div class="form-group" >
                <label>BLOOD GROUPS </label>
                <select class="form-control" style="width: 60px;">
                    <option>A+</option>
                    <option>B+</option>
                    <option>AB+</option>
                    <option>O+</option>
                    <option>A-</option>
                    <option>B-</option>
                    <option>AB-</option>
                    <option>O-</option>
                </select>


            <button type="submit">submit</button>
        </div>
    </form>
</div>


</body>