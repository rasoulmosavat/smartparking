<?php
require_once __DIR__."/config.php";

    $db = new Connect;
	$users = array();
	
// 	SELECT 
//   *
// FROM
//     carowner
// WHERE       
//     user = 'ali' AND 
//     pass = '123' 
    
	
	$data = $db->prepare('SELECT * FROM carowner where user="'.$_GET['user'].'"and pass="'.$_GET['pass'].'"');
	$data->execute();
	while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
	        $id=$OutputData['id'];
    		$pass=$OutputData['pass'];
    		$user=$OutputData['user'];
			$name=$OutputData['name'];
	     }
	     
 if(isset($name)){
	         header('Location: https://saljningzone.se/?user='.$user.'&pass='.$pass);
	         }
	         else{
	             header('Location: https://saljningzone.se/login.php');
	         }
	     
	






?>