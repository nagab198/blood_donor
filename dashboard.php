<?php


?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
        <title></title>
    <!-- Google fonts - Popppins for copy-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <!-- Prism Syntax Highlighting-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/vendor/prismjs/plugins/toolbar/prism-toolbar.css">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/vendor/prismjs/themes/prism-okaidia.css">
    <!-- The Main Theme stylesheet (Contains also Bootstrap CSS)-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/bubbly/1-3/css/style.default.4faf0c98.css" id="theme-stylesheet">
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>


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
        background:ghostwhite;
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
        color: grey;
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

    #main_icon
    {
        float:right;
        padding-right: 65px;
        padding-top:20px;
    }
    .sub_icon
    {
        float:right;
        padding-right: 65px;
        padding-top:10px;
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

    @media (max-width:767px) {
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
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
</script>
<body>

<div id="wrapper" class="active">

    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
            <li><a href="home.php">Dashboard</a></li>
            <li><a href="register.php">Blood groups</a></li>
            <li><a href="user_profile.php ">user profile</a></li>
            <li><a href="changepassword.html">changepassword</a></li>
            <li><a href="login.php">logout</a></li>
        </ul>
    </div>


</body>
</html>