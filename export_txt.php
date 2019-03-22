<?php

$filename = "Staff_List.txt";
$form_data = $_POST;

$jpn_name1 = $_POST['japan_name1'];
$name1      = $_POST['name1'];
$position1 = $_POST['position1'];
$employee_id1 = $_POST['employee_id1'];
$for_one  = $jpn_name1.','.$name1.','.$position1.','.$employee_id1;

$jpn_name2 = $_POST['japan_name2'];
$name2      = $_POST['name2'];
$position2 = $_POST['position2'];
$employee_id2 = $_POST['employee_id2'];
$for_two  = $jpn_name2.','.$name2.','.$position2.','.$employee_id2;
$data_arr = array($for_one,$for_two);

foreach ($data_arr as $data){
    if(file_exists($filename)){
        $current = file_get_contents($filename);
        if($current == true){
            $current .= $data."\r\n";

            file_put_contents($filename, $current);
        }else{
            file_put_contents($filename,$data."\r\n");
        }

    }else{
        file_put_contents($filename,$data."\r\n");
        chmod($filename,0777);
    }
}
//$json_form_data = json_encode($form_data);
/*if(file_exists($filename)){
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
}*/




echo "<h1>Success</h1>";
