<?php
/**
 * Created by PhpStorm.
 * User: cc
 * Date: 2019/04/01
 * Time: 9:42
 */

$e_id = preg_replace('/\s+/', '', $_POST['e_id']);
$filename = "Staff_List.txt";
if(file_exists($filename)){
    $file_exist = true;
    $data = file($filename);
    $data_ary = array();
    foreach($data as $key => $d){
        $each = explode(',',$d);
        $data_ary[$key] = $each;
    }

    $format_ary = array();
    foreach ($data_ary as $ary){
        $ary_3 = preg_replace('/\s+/', '', $ary[3]);
        foreach ($ary as $a){

            $format_ary[$ary_3] = $ary;
        }
    }

    $employee_id = array();
    $count = 0;
    foreach ($format_ary as $f_key => $f_ary){
        $employee_id[$count] = $f_key;
        $count++;
    }

    $response_data = $format_ary[$e_id];
    $response = array('jp_name' => $response_data[0],'name' => $response_data[1],'position' => $response_data[2]);
    echo json_encode($response);
}else{
    $file_exist = false;
}