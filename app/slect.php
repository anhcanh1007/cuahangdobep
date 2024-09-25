<?php
$pdo = require './test.php';

$sql = 'select * from user';
$result = $pdo->query($sql);
$publishers = $result->fetchAll(PDO::FETCH_ASSOC);
foreach ($publishers as $done) {
    echo "name: " .$done['name'];
}