<?php
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "dashboard":
            include '../backend/layouts/index.php';
            break;
        case "settings":
            echo "anh canh test";
            break;
        // Các case khác cho backend
        default:
            include '../backend/layouts/index.php';
            break;
    }
} else {
    include '../backend/layouts/index.php';
}
?>
