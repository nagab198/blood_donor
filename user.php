


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
                                   placeholder="first name">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="email">
                                <h4>Email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email.com">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="password">
                                <h4>Password</h4>
                            </label>
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="password" >
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="password2">
                                <h4>Verify</h4>
                            </label>
                            <input type="password" class="form-control" name="password2" id="password2"
                                   placeholder="password2" title="enter your password2.">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
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