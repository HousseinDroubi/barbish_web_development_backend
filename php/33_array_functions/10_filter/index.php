
<?php
    // array_filter returns a new array with length 0 or same length upon a certain condition
    $arr_1 = [10, 11, 17, 23, 55, 77, 44, 12, 2];
    
    $arr_2 = array_filter($arr_1, fn($number)=> $number % 2 == 0);
    $arr_3 = array_filter($arr_1, fn($number)=> $number % 2 != 0);
    
    echo json_encode($arr_2); // [10,44, 12 ,2]
    echo json_encode($arr_3); // [11,17,23, 55, 77]
?>