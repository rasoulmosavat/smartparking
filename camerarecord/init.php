<?php
require "vendor/autoload.php";

use Google\Cloud\Vision\VisionClient;
$vision = new VisionClient([ 'keyFile' => json_decode(file_get_contents("key.json"),true)]);

$familyPhotoResource = fopen("image.jpg",'r');

$image = $vision->image($familyPhotoResource,['Face_DETECTION','WEB_DETECTION']);
$result = $vision->annotate($image);

var_dump($result);