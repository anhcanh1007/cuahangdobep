<?php
$host = 'localhost';
$db_name = 'project_one';
$user = 'anhcanh';
$pass = 'Anh100700@';


function pdo_connect()
{
    global $host, $db_name, $user, $pass;
    $dns = "mysql:host=$host;dbname=$db_name;charset=UTF8";
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

function pdo_execute($sql, ...$params)
{
    try {
        $connect = pdo_connect();
        $exe = $connect->prepare($sql);
        $exe->execute($params);
    } catch (PDOException $e) {
        echo $e->getMessage();
    } finally {
        $connect = null;
    }
}

