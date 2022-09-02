<?php
if (isset($_SESSION['user_name']) && isset($_SESSION['account_type'])) {
    if ($_SESSION['account_type'] == 'ADMIN') {
        header('header: dashboard.php');
    }
} else {
    header('location: admin.php');
}