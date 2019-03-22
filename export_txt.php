<?php

$filename = "Staff_List.txt";
$form_data = $_POST;
$json_form_data = json_encode($form_data);
if(file_exists($filename)){
    $current = file_get_contents($filename);
    if($current == true){
        $current .= $json_form_data."\r\n";

        file_put_contents($filename, $current);
    }else{
        file_put_contents($filename,$json_form_data."\r\n");
    }

}else{
    file_put_contents($filename,$json_form_data."\r\n");
    chmod($filename,0777);
}




echo "<h1>Success</h1>";
