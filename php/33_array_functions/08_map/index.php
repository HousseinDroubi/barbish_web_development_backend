<?php
    // array_map will return a new array with same length but with or without updated elements 
    $arr_1 = [10,20,30,40];

    $arr_2 = array_map(fn($number)=>$number-5,$arr_1);
    
    echo json_encode($arr_2);
?>
