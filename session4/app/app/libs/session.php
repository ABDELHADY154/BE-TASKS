<?php

if (isset($_SESSION['user'])) {
    header('location: index.php');
    exit();
}
$_SESSION['user'] = $_POST['email'];
header('location: index.php');
exit();
