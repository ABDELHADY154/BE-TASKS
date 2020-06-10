<?php
require __DIR__ . '/vendor/autoload.php';
require_once 'app/config/db_connection.php';
// require_once 'app/config/delete.php';
require_once 'app/temps/header.php';

if (empty($_GET['p'])) {
    $page  = 'h';
} else {
    $page = $_GET['p'];
}

switch ($page) {
    case 'c':
        require_once 'pages/create.view.php';
        break;
    case 'h':
        require_once 'pages/home.view.php';
        break;
    case 'edit':
        require_once 'pages/edit.view.php';
        break;

    default:
        require_once 'pages/404.view.php';
}


require_once 'app/temps/footer.php';
