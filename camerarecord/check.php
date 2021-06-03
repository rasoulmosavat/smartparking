<?php
use Google\Cloud\Vision\VisionClient;

if(isset($_POST['textarea']) or isset($_FILES['image'])){
    
session_start();

require "vendor/autoload.php";

  

$vision = new VisionClient(['keyFile' => json_decode(file_get_contents("key.json"), true)]);


if(isset($_FILES['image'])){
    if( $_FILES['image']!=""){
    $familyPhotoResource = fopen($_FILES['image']['tmp_name'], 'r');
    }else{
    $familyPhotoResource = fopen("IMG-1615069753.png", 'r');
    }
}
elseif(isset($_POST['textarea'])){
   $img = $_POST['textarea'];
$img = str_replace('data:image/png;base64,','',$img);
$img = str_replace(' ','+',$img);
$fileData = base64_decode($img);
$fileName = 'IMG-'.time().'.png';
file_put_contents($fileName, $fileData);
$familyPhotoResource = fopen($fileName, 'r');

}

$image = $vision->image($familyPhotoResource, 
    ['FACE_DETECTION',
     'WEB_DETECTION',
     'LABEL_DETECTION',
     'IMAGE_PROPERTIES',
     'SAFE_SEARCH_DETECTION',
     'LANDMARK_DETECTION',
     'LOGO_DETECTION',
     'TEXT_DETECTION'
    ]);
$result = $vision->annotate($image);

if ($result) {
    $imagetoken = random_int(1111111, 999999999);
    if(isset($_FILES['image']) and $_FILES['image']!="" ){
       move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/feed/' . $imagetoken . ".jpg");
    }
} else {
    header("location: index.php");
    die();
}

$faces = $result->faces();
$logos = $result->logos();
$labels = $result->labels();
$text = $result->text();
$fullText = $result->fullText();
$properties = $result->imageProperties();
$cropHints = $result->cropHints();
$web = $result->web();
$safeSearch = $result->safeSearch();
$landmarks = $result->landmarks();

}


       
 
require_once __DIR__."../../config.php";
$db = new Connect;

	$data = $db->prepare('SELECT * FROM camerainfo where address="00-20-10-2A-03-0A"');
	$data->execute();
	$parkinginfoid='';
	while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
    		$parkinginfoid= $OutputData['parkinginfoid'];
	     }

	
	echo '111';
    $carownerid='';
	$data2 = $db->prepare('SELECT * FROM carowner where licenseplate='.$text[0]->description());
	echo '44';
    	$data2->execute();
    	echo '222';
        	while($OutputData = $data2->fetch(PDO::FETCH_ASSOC)){
            		    $carownerid= $OutputData['id'];
    	     }
	     
	    
echo '333';





if($carownerid!=""){

	$data3 = $db->prepare('SELECT * FROM parkduration where licenseplate='.$text[0]->description().'ORDER BY id DESC LIMIT 1');
	$data3->execute();
	$parkdurationid='';
	while($OutputData = $data3->fetch(PDO::FETCH_ASSOC)){
    		$parkdurationentertime= $OutputData['entertime'];
    		$parkdurationexittime= $OutputData['exittime'];	
    		$parkdurationid= $OutputData['id'];	
    		
	     }
	    
	     $time = date("Y-m-d h:i:s",time());
	   
	     
	      if(!isset($parkdurationentertime)){
	         
	                $sql = 'INSERT INTO parkduration (licenseplate,entertime,customerid,parkinginfoid) VALUES ('.$text[0]->description().',"'.$time.'",'.$carownerid.','.$parkinginfoid.')';
                    $data4= $db->prepare($sql);
                    $data4->execute();
	            
	     }
	     else{
             if($parkdurationexittime==0){
                
                   $sql = "UPDATE parkduration SET exittime='.$time.'WHERE id=".$parkdurationid;
                    $data5= $db->prepare($sql);
                    $data5->execute();
                    
             }else{
                
                $sql = 'INSERT INTO parkduration (licenseplate,entertime,customerid,parkinginfoid) VALUES ('.$text[0]->description().',"'.$time.'",'.$carownerid.','.$parkinginfoid.')';
                    $data6= $db->prepare($sql);
                    $data6->execute();
             }
	     }
	     

}



	     

header('Location: https://saljningzone.se/camerarecord/');
?>

