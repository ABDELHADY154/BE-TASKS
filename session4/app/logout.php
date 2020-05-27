<?php
session_start();

if (empty($_SESSION['user'])) {
    header('location: login.php');
    exit();
}
unset($_SESSION['user']);
header('location: index.php');
exit();
