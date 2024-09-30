<?php

include './layouts/header.php';

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "dashboard":
            include '../backend/layouts/index.php';
            break;
        case "settings":
            echo "anh canh test";
            break;
        default:
            include './layouts/home.php';
            break;
    }
} else {
    include './layouts/home.php';
}

?>
