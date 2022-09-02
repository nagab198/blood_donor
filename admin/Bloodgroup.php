<?php
include 'config.php';
include 'header.php';
?>

    <div class="container">
        <div class="col-lg-6" style="margin-top: 50px; margin-left: 200px;">
            <a href="addform.php" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus-circle"></i> Add New</a>

            <table class="table table-responsive table-bordered"
                   style="background-color: #818181; margin-left: 220px; ">
                <tbody>
                <h1 class="text-warning" style="text-align: center;">Blood groups</h1>
                <tr>
                    <th colspan="4" style="color:white;background-color:red; text-align: center;">The Blood Type
                        Donors
                    </th>
                </tr>

                <br>
                <tr>
                    <td style="text-decoration: none;"><b>Action</b></td>
                    <td><b>Blood Type</b></td>
                    <!--            <td><b>Donate Blood To</b></td>-->
                    <!--            <td><b>Receive Blood From</b></td>-->
                </tr>
                <?php

                $sql = "SELECT * FROM `blood_group`";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <tr>
                            <td>
                                <ul class="action-list">
                                    <li><a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i
                                                    class="fa fa-times"></i>Delete</a></li>
                                </ul>
                            </td>
                            <td><span style="color: #961e1b;"><b><?= $row['name'] ?></b></span></td>
                        </tr>
                        <?php
                    }
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
<?php
include "footer.php";