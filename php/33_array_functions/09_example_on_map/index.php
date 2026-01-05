
<?php
    $arr_1 = [100,200,300,400,500];
    
    $arr_2 = array_map(fn($number)=> $number / 100 ,$arr_1);
    
    $arr_3 = array_map(fn($number)=> $number /2 ,$arr_1);

    echo json_encode($arr_2); // [1,2,3,4,5]
    echo json_encode($arr_3); // [50,100,150,200,250]
?>