<?php
$dsn = "mysql:host=localhost;dbname=project_one;charset=UTF8";

try {
	$pdo = new PDO($dsn, "anhcanh", "Anh100700@");

	if ($pdo) {
		echo "Connected to the" . "project_one" . "database successfully! . \n";
		return $pdo;
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

//select
$sql = 'select * from user';
// $re = $pdo->query($sql);
// if ($re) {  
//     $publishers = $re->fetchAll(PDO::FETCH_ASSOC);  
    
//     // Duyệt qua các bản ghi và in ra  
//     foreach ($publishers as $publisher) {  
//         echo "ID: " . $publisher['id'] . " - Name: " . $publisher['name'] . "\n";  
//     }  
// } else {  
//     echo "Lỗi truy vấn: " . $pdo->errorInfo()[2];  
// }  
$resu2 = $pdo->prepare("select * from user");
$resu2->execute();
$re4 = $resu2->fetchAll(PDO::FETCH_ASSOC);
foreach($re4 as $done) {
	echo "id: ".$done['id'] . "name: " . $done['name'] . "\n";
}


//insert
$new_in = $pdo->prepare("insert into user (name) values (:name)");
$new_in->execute(['name' => 'linh chi']);
//select by id
$re1 = $pdo->prepare("select * from user where id = :id");
$re1->execute(['id' => 3]);
$record1 = $re1->fetch(PDO::FETCH_ASSOC);
echo $record1['name'];
//delete
$stmtDelete = $pdo->prepare("DELETE FROM user WHERE id = :id");  
$stmtDelete->execute(['id' => 4]); 