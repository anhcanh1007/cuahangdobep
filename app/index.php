<?php  

// Kiểm tra nếu URL hiện tại là cho backend  
// $currentUrl = $_SERVER['REQUEST_URI'];  

// if (strpos($currentUrl, '/backend') === 0) {  
//     // Thực hiện các route của backend  
//     if (isset($_GET['act']) && ($_GET['act'] != "")) {  
//         $act = $_GET['act'];  
//         switch ($act) {  
//             case 'header':  
//                 include './backend/layouts/index.php';  
//                 break;  
//             case 'ad':  
//                 echo "anh canh dang test";  
//                 break;  
//             default:   
//                 include '../backend/layouts/index.php';  
//                 break;  
//         }  
//     } else {  
//         include '../backend/layouts/index.php';  // hoặc trang mặc định cho backend  
//     }  
// } else {  
include "./frontend/layouts/header.php";  

    // Xử lý cho frontend  
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
            case 'detail_product':  
                include './frontend/pages/products/detail_product.php';  
                break;  
            default:  
                include './frontend/layouts/home.php';  
                break;  
        }  
    } else {  
        include './frontend/layouts/home.php';  
    }  

include "./frontend/layouts/footer.php";  
?>