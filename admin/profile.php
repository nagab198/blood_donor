<?php
session_start();
include "config.php";
include 'header.php';

$id = $_SESSION['id'];

$edit_name = null;
$error = null;
$edit_email = null;
$user_error = null;
$email_error = null;
$pass_error = null;
$pass2_error = null;

$pass = null;
$pass2 = null;
$msg = null;

if (isset($_POST['submit'])) {
    if (isset($_POST['user_name']) && $_POST['user_name'] != '') {
        $user_name = $_POST['user_name'];
    } else {
        $user_error = "user name required ";
    }
    if (isset($_POST['email']) && $_POST['email'] != '') {
        $email = $_POST['email'];
    } else {
        $email_error = "email required ";
    }
    if (isset($_POST['password']) && $_POST['password'] != '') {
        $pass = md5($_POST['password']);
    } else {
        $pass_error = "password required ";
    }
    if (isset($_POST['password2']) && $_POST['password2'] != '') {
        $pass2 = md5($_POST['password2']);
    } else {
        $pass2_error = " verify password required ";
    }
    if ($pass != $pass2) {
        $error = " password not match ";
    }

    if ($error == null && $user_error == null && $email_error == null && $pass2_error == null && $pass_error == null) {
        $sql1 = "UPDATE `user` SET `user_name`='$user_name',`email`='$email',`password`='$pass' WHERE `id`= $id";
        $run = mysqli_query($conn, $sql1);
        if ($run) {
            $msg = "<span class='text-success'>profile updated</span>";
        } else {
            $error = "update failed";
        }
    }

}


if (isset($id) && $id != '') {
    $sql = "SELECT * FROM `user` where `id` = $id";
    $res = mysqli_query($conn, $sql);
    $cnt = mysqli_num_rows($res);
    if ($cnt == 1) {
        $row = mysqli_fetch_assoc($res);
        $edit_name = $row['user_name'];
        $edit_email = $row['email'];
    }
}


?>
<br>
<br>
<div class="container">

    <div class="row">
        <div class="col-sm-3">

            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                <h6>Upload a photo...</h6>
            </div>
            <br>
        </div>
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <span class="position-relative"><?= $msg ?></span>
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">

                    <form class="form" action="" method="post" id="registration Form">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h4>User name</h4>
                                </label>
                                <input type="text" class="form-control" name="user_name" id="firstname"
                                       placeholder="first name" value="<?= $edit_name ?>">
                                <?= $user_error ?>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email.com"
                                       title="enter your email." value="<?= $edit_email ?>">
                                <?= $email_error ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="password">
                                    <h4>Password</h4>
                                </label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="password" title="enter your password.">
                                <?= $pass_error ?>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2">
                                    <h4>Verify</h4>
                                </label>
                                <input type="password" class="form-control" name="password2" id="password2"
                                       placeholder="password2" title="enter your password2.">
                                <?= $pass2_error ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <span class="text-danger"><?= $error ?></span>
                                <br>
                                <button class="btn btn-lg btn-success" name="submit" type="submit"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Save
                                </button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset
                                </button>
                            </div>
                        </div>
                    </form>

                    <hr>

                </div>


            </div>


        </div>
    </div>
</div>

</div>
</body>
</html>