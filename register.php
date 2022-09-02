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
        body{
            background-image:url("img/b1.jpeg");
        }
    </style>
</head>
<body>

<br>
<br>
<div class="container">
    <div class="tab-content">
            <div class="tab-pane active" id="home">
                <h1 style="text-align: center;color: chocolate;">REGISTER FOR BLOOD DONOR</h1>
                <form class="form-group col-lg-4" action="#" method="post" id="registration Form" style="margin-left: 350px; margin-top: 50px;" >
                    <div class="form-group" >
                                <h4>First name</h4>
                            <input type="text" class="form-control" name="first_name" id="firstname" placeholder="first name">
                    </div>
                    <div class="form-group">
                                <h4>Date of brith</h4>
                            <input type="date" class="form-control" name="date of brith" placeholder="enter phone">
                        </div>
                    <div class="form-group">
                        <label>BLOOD GROUPS </label>
                        <select class="form-control">
                            <option>A+</option>
                            <option>B+</option>
                            <option>AB+</option>
                            <option>O+</option>
                            <option>A-</option>
                            <option>B-</option>
                            <option>AB-</option>
                            <option>O-</option>
                        </select>


                       <div class="from-group">
                            <h4>lost donate blood</h4>
                        <input type="date" class="form-control" name="lost donate blood" placeholder="enter phone">
                    </div>
                        <div class="from-group">
                                <h4>phone number</h4>
                            <input type="number" class="form-control" name="phone number" placeholder="enter phone">
                        </div>
                    <div class="from-group">
                        <h4>address</h4>
                        <input type="text" class="form-control" name="phone number" placeholder="enter address">
                    </div>
                    <br>
                    <div class="from-group" style="margin-left: 50px;">
                        <button class="btn btn-lg btn-success" type="submit"><a href="admin/dashboard.php ">Register</a></button>
                    </div>
                </form>
            </div>
    </div>
</div>
    </div>
</div>
</div>
</body>
</html>





