<?php

include "./frontend/layouts/header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'register':
            include './frontend/authenticates/register.php';
            break;
        case 'login':
            include './frontend/authenticates/login.php';
            break;
        case 'forgot_password':
            include './frontend/authenticates/forgot_password.php';
            break;
        case 'show_list_product_by_category':
           include './frontend/pages/products/show_product_by_category.php';
            break;
        default:
            include './frontend/layouts/home.php';
            break;
    }
} else {
    include './frontend/layouts/home.php';
}

include "./frontend/layouts/footer.php";
