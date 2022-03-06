<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

    include_once './database.php';


$method = $_SERVER['REQUEST_METHOD'];

$q = $_REQUEST['q'];
switch ($q) {
    case 'readAll':
        read();
        break;
    default:
        echo "Invalid Query";
}