
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <title>template</title>
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        .overlay {
            height: 0%;
            width:100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-y: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        .overlay {
            overflow-y: auto;
        }
        .overlay a {
            font-size: 20px
        }
        .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
        }
        .panel{
            font-family: 'Raleway', sans-serif;
            padding: 0;
            border: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.08);
        }
        .panel .panel-heading{
            background: #961e1b;
            padding: 15px;
            border-radius: 0;
        }
        .panel .panel-heading .btn{
            color: #fff;
            background-color: #000;
            font-size: 14px;
            font-weight: 600;
            padding: 7px 15px;
            border: none;
            border-radius: 0;
            transition: all 0.3s ease 0s;
        }
        .panel .panel-heading .btn:hover{ box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); }
        .panel .panel-heading .form-horizontal .form-group{ margin: 0; }
        .panel .panel-heading .form-horizontal label{
            color: #fff;
            margin-right: 10px;
        }
        .panel .panel-heading .form-horizontal .form-control{
            display: inline-block;
            width: 80px;
            border: none;
            border-radius: 0;
        }
        .panel .panel-heading .form-horizontal .form-control:focus{
            box-shadow: none;
            border: none;
        }
        .panel .panel-body{
            padding: 0;
            border-radius: 0;
        }
        .panel .panel-body .table thead tr th{
            color: #fff;
            background: #8D8D8D;
            font-size: 17px;
            font-weight: 700;
            padding: 12px;
            border-bottom: none;
        }
        .panel .panel-body .table thead tr th:nth-of-type(1){ width: 120px; }
        .panel .panel-body .table thead tr th:nth-of-type(3){ width: 50%; }
        .panel .panel-body .table tbody tr td{
            color: #555;
            background: #fff;
            font-size: 15px;
            font-weight: 500;
            padding: 13px;
            vertical-align: middle;
            border-color: #e7e7e7;
        }
        .panel .panel-body .table tbody tr:nth-child(odd) td{ background: #f5f5f5; }
        .panel .panel-body .table tbody .action-list{
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .panel .panel-body .table tbody .action-list li{ display: inline-block; }
        .panel .panel-body .table tbody .action-list li a{
            color: #fff;
            font-size: 13px;
            line-height: 28px;
            height: 28px;
            width: 33px;
            padding: 0;
            border-radius: 0;
            transition: all 0.3s ease 0s;
        }
        .panel .panel-body .table tbody .action-list li a:hover{ box-shadow: 0 0 5px #ddd; }
        .panel .panel-footer{
            color: #fff;
            background: #535353;
            font-size: 16px;
            line-height: 33px;
            padding: 25px 15px;
            border-radius: 0;
        }
        .pagination{ margin: 0; }
        .pagination li a{
            color: #fff;
            background-color: rgba(0,0,0,0.3);
            font-size: 15px;
            font-weight: 700;
            margin: 0 2px;
            border: none;
            border-radius: 0;
            transition: all 0.3s ease 0s;
        }
        .pagination li a:hover,
        .pagination li a:focus,
        .pagination li.active a{
            color: #fff;
            background-color: #000;
            box-shadow: 0 0 5px rgba(0,0,0,0.4);
        }

    </style>
</head>
<body>
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="dashboard.php">Dashboard</a>
        <a href="Bloodgroup.php">Blood groups</a>
        <a href="user_list.php">Blood donors list</a>
        <a href="profile.php">User profile</a>
        <a href="changepassword.php">change password</a>
        <a href="logout.php">logout</a>
    </div>
</div>

<span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776; BLOOD DONOR <small class="text-danger">MANAGEMENT</small></span>

<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form class="form-horizontal pull-right">
                                <div class="form-group">
                                    <label>Show : </label>
                                    <select class="form-control">
                                        <option>5</option>
                                        <option>10</option>
                                        <option>15</option>
                                        <option>20</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Action</th>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Blood group</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <ul class="action-list">
                                    <li><a href="#" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a></li>
                                    <li><a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a></li>
                                </ul>
                            </td>
                            <td>1</td>
                            <td>chaitanya</td>
                            <td>20</td>
                            <td>A+</td>

                        </tr>
                        <tr>
                            <td>
                                <ul class="action-list">
                                    <li><a href="#" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a></li>
                                    <li><a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a></li>
                                </ul>
                            </td>
                            <td>2</td>
                            <td>lokesh</td>
                            <td>22</td>
                            <td>B+</td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="action-list">
                                    <li><a href="#" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a></li>
                                    <li><a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a></li>
                                </ul>
                            </td>
                            <td>3</td>
                            <td>nagababu</td>
                            <td>26</td>
                            <td>AB+</td>

                        </tr>
                        <tr>
                            <td>
                                <ul class="action-list">
                                    <li><a href="#" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a></li>
                                    <li><a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a></li>
                                </ul>
                            </td>
                            <td>4</td>
                            <td>Sai</td>
                            <td>26</td>
                            <td>o+</td>

                        </tr>
                        <tr>
                            <td>
                                <ul class="action-list">
                                    <li><a href="#" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a></li>
                                    <li><a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a></li>
                                </ul>
                            </td>
                            <td>5</td>
                            <td>ganga</td>
                            <td>24</td>
                            <td>o-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>
</html>