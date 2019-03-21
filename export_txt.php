<?php

$filename = "Staff_List.txt";
chmod($filename,0777);
$form_data = $_POST;
$json_form_data = json_encode($form_data);
$current = file_get_contents($filename);
if($current == true){
	$current .= $json_form_data."\n";
// Write the contents back to the file
	file_put_contents($filename, $current);
}else{
	file_put_contents($filename,$json_form_data);
}
echo "<h1>Success</h1>";
