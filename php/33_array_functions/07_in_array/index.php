<?php

    // in_array is a built function that checks if an element is existed inside an array

    $arr_1 = [10,20,30,40,50];
    echo json_encode(in_array(10,$arr_1)); // true
    echo "<br>";
    echo json_encode(in_array(11,$arr_1)); // false
    echo "<br>";
    echo json_encode(in_array("10",$arr_1)); // true
    echo "<br>";
    echo json_encode(in_array("10",$arr_1,true)); // false (the last argument "true" is to check specifically "10" of type string not int-> so it returned false)
    echo "<br>";
?>