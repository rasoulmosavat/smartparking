<?php
require_once __DIR__."/config.php";
class API{
	function Select(){
       $db = new Connect;
	$users = array();
	$data = $db->prepare('SELECT * FROM parkinginfo');
	$data->execute();
	while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
	      $users[$OutputData['id']] = array(
	     	'id' => $OutputData['id'],
		'pname' => $OutputData['pname'],
		'address' => $OutputData['address'],
		'freeloc' => $OutputData['freeloc'],
  	      );
	     }
		return $users;

	}	
}



$API = new API;
header('Content-Type: application/json');
$json_data= $API->Select();

// var_dump($json_data);

// foreach($json_data as $value){
//   echo $value['pname'];
// }


?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Parking Name</th>
      <th scope="col">Address</th>
      <th scope="col">Free Parking</th>
    </tr>
  </thead>
  <tbody>
 
 <?php   foreach($json_data as $value){    ?>
    <tr>
      <th scope="row">1</th>
      <td><?php  echo $value['pname']; ?></td>
      <td><?php  echo $value['address']; ?></td>
      <td>@<?php  echo $value['freeloc']; ?></td>
    </tr>
    
  <?php   }   ?>    
 
  </tbody>
</table>


