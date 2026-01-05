<?php
    // array_reverse reverses the order of elements in an array.
    $arr_1 = [10,20,30,40,50];
    $arr_2 = array_reverse($arr_1); // Reverses the order of elements in an array.
    $arr_3 = array_reverse($arr_1,true); // Reverses the order of elements in an array and true to keep the keys

    echo json_encode($arr_2);
    echo json_encode($arr_3);
?>