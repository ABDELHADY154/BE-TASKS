<?php
require __DIR__ . '/vendor/autoload.php';
require_once 'app/model/MyCalculatorClass.php';
// $page = $_GET['p'];

if (empty($_GET['p'])) {
    $page  = 'h';
} else {
    $page = $_GET['p'];
}

switch ($page) {
    case 'h':
        require_once 'pages/home.view.php';
        break;
        // case 'a':
        //     require_once 'pages/about.view.php';
        //     break;

    default:
        require_once 'pages/error.php';
}
