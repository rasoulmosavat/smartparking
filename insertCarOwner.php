<?php

echo $_GET['name'];

require_once __DIR__."/config.php";
class API{
	function Select(){
    $db = new Connect;

    $data = [
        'name' => $_GET['name'],
        'family' => $_GET['family'],
        'email' => $_GET['email'],
        'tell' => $_GET['tell'],
        'licenseplate' => $_GET['licenseplate'],
        'user' => $_GET['user'],
        'pass' => $_GET['pass'],
        
    ];
    $sql="UPDATE carowner SET name= :name,family= :family,email = :email,tell = :tell,licenseplate= :licenseplate WHERE user= :user AND pass= :pass";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);

	}	
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();

header('Location: https://saljningzone.se/edituser.php?user='.$_GET['user'].'&pass='.$_GET['pass']);
?>

