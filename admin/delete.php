<?php
include "config.php";

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];


    $sql = "DELETE FROM `blood_group` WHERE `id` = $id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location: Bloodgroup.php');
    } else {
        echo "Delete failed";
    }


}


