<?php

$filename = "Staff_List.txt";
$form_data = $_POST;

$jpn_name1 = $_POST['japan_name1'];
$name1      = $_POST['name1'];
$position1 = $_POST['position1'];
$e_id1 = $_POST['employee_id1'];
//$txt_employee_id1 = $_POST['$txt_employee_id1'];
if($e_id1 == "Other"){
    $employee_id1 = $_POST['txt_employee_id1'];
}else{
    $employee_id1 = $_POST['employee_id1'];
}
$for_one  = $jpn_name1.','.$name1.','.$position1.','.$employee_id1;

$jpn_name2 = $_POST['japan_name2'];
$name2      = $_POST['name2'];
$position2 = $_POST['position2'];
$e_id2 = $_POST['employee_id2'];
if($e_id2 == "Other"){
    $employee_id2 = $_POST['txt_employee_id2'];
}else{
    $employee_id2 = $_POST['employee_id2'];
}

$for_two  = $jpn_name2.','.$name2.','.$position2.','.$employee_id2;
$data_arr = array($for_one,$for_two);
/*foreach ($data_arr as $data){
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
}*/
if(file_exists($filename)){
    $e_data = file($filename);
    $e_data_ary = array();
    foreach($e_data as $key => $e_d){
        $each = explode(',',$e_d);
        $e_data_ary[$key] = $each;
    }


    $e_format_ary = array();
    foreach ($e_data_ary as $e_ary){
        foreach ($e_ary as $a){
            $e_format_ary[$e_ary[3]] = $e_ary;
        }
    }

    $employee_id = array();
    $count = 0;
    foreach ($e_format_ary as $f_key => $f_ary){

        $employee_id[$count] = preg_replace('/\s+/', '', $f_key);
        $count++;
    }

        foreach ($e_data as $line_num => $e_d) {
            $new_parts = explode(',', $e_d);
            $file_e_id = preg_replace('/\s+/', '', $new_parts[3]);
            switch ($file_e_id) {
                case $employee_id1 :
                    $new_parts[0] = $jpn_name1;
                    $new_parts[1] = $name1;
                    $new_parts[2] = $position1;
                    $e_data[$line_num] = implode(',', $new_parts);
                    $UpdatedContents = implode("",$e_data);
                    file_put_contents($filename,$UpdatedContents);
                    break;

                case $employee_id2 :
                    $new_parts[0] = $jpn_name2;
                    $new_parts[1] = $name2;
                    $new_parts[2] = $position2;
                    $e_data[$line_num] = implode(',', $new_parts);
                    $UpdatedContents = implode("",$e_data);
                    file_put_contents($filename,$UpdatedContents);
                    break;


            }
        }
    if(!in_array($employee_id1,$employee_id)){
            $current = file_get_contents($filename);
            $current .= "".$for_one."\r\n";

            file_put_contents($filename, $current);
        }
    if(!in_array($employee_id2,$employee_id)){
        $current = file_get_contents($filename);
        $current .= $for_two."\r\n";

        file_put_contents($filename, $current);
    }
    /*foreach ($data_arr as $data){
        $current = file_get_contents($filename);
        if($current == true){
            $current .= $data."\r\n";

            file_put_contents($filename, $current);
        }else{
            file_put_contents($filename,$data."\r\n");
        }
    }*/



}else{
    $data = $for_one."\r\n".$for_two;
    file_put_contents($filename,$data);
    /*foreach ($data_arr as $data){
        file_put_contents($filename,$data."\r\n");

    }*/
    chmod($filename,0777);
}




echo "<h1>Success</h1>";
