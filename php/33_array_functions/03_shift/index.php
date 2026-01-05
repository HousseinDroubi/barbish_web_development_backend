<?php
    // array_shift removes first element from array and returns it

    $arr_1 = [10,20,30,40,50];
    $removed_element = array_shift($arr_1);
    echo json_encode($removed_element);
    echo "<br>";
    echo json_encode($arr_1);
?>