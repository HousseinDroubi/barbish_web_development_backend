<?php
    // array_unshift adds one or more elements to the beginning of an array
    $arr_1 = [10,20,30,40,50];
    array_unshift($arr_1,0,1,2,3);
    echo json_encode($arr_1);
?>