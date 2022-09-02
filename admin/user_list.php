<?php
include "config.php";
include "header.php";
?>
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

                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Blood group</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM `user` where `account_type` = 'USER'";
                        $res = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_array($res)) {
                                ?>

                                <tr>
                                    <td><?=$row['id']?></td>
                                    <td><?=$row['user_name']?></td>
                                    <td><?=$row['age']?></td>
                                    <td><?=$row['blood_group']?></td>


                                </tr>
                                <?php

                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

<?php
include "footer.php";