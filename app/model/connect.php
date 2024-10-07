<?php
$host = 'localhost';
$db_name = 'project_one';
$user = 'anhcanh';
$pass = 'Anh100700@';


function pdo_connect()
{
    global $host, $db_name, $user, $pass;
    $dns = "mysql:host=$host;dbname=$db_name;charset=utf8";
    try {
        $connect = new PDO($dns, $user, $pass);
        if ($connect) {
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function pdo_execute($sql)
{
    // try {
    //     $connect = pdo_connect();
    //     $exe = $connect->prepare($sql);
    //     $exe->execute($params);
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // } finally {
    //     $connect = null;
    // }
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $connect = pdo_connect();
        $exec = $connect->prepare($sql);
        $exec->execute($sql_args);
    } catch (PDOException $e) {
        echo $e->getMessage();
    } finally {
        $connect = null;
    }
}

// function insertcategory($name, $image)
// {
//     $pdo = pdo_connect();

//     $sql = "INSERT INTO categories (name, image) VALUES (:name, :image)";

//     try {
//         $stmt = $pdo->prepare($sql);
//         $stmt->bindParam(':name', $name);
//         $stmt->bindParam(':image', $image);
//         $stmt->execute();
//         echo "danh muc duoc chen thanh cong";

//     } catch (PDOException $e) {
//         echo "loi " . $e->getMessage();
//     }
// }

// $name = "anh canh";
// $image = "../images/categories/dcnp.png";
// insertcategory($name, $image);
