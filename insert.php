<?php
require_once __DIR__."/config.php";
class API{
	function Select(){
    $db = new Connect;

    $data = [
        'name' => $_GET['name'],
        'age' => $_GET['age'],
    ];
    $sql = "INSERT INTO users (name, age) VALUES (:name, :age)";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);

	}	
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();

?>

