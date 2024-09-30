<?php

include './layouts/header.php';

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "dashboard":
            include './layouts/home.php';
            break;
        case "add_product":
            include './pages/products/add_product.html';
            break;
        case "edit_product":
            include './pages/products/edit_product.html';
            break;
        case "list_product":
            include './pages/products/list_product.html';
            break;
        case "add_cate":
            include './pages/products/add_product.html';
            break;
        case "edit_cate":
            include './pages/products/edit_product.html';
            break;
        case "list_cate":
            include './pages/products/list_product.html';
            break;
        default:
            include './layouts/home.php';
            break;
    }
} else {
    include './layouts/home.php';
}

include './layouts/footer.php';

?>
