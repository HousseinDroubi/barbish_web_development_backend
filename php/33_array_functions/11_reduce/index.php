
<?php
    // array_reduce() function is used to reduce an array to a single value by repeatedly applying a callback function.
    $arr = [10, 20, 30];

    // $total = 0;
    // foreach ($arr as $value) {
    //     $total += $value;
    // }

    // Instead, we can do the following:

    $total = array_reduce($arr,fn($carry, $item)=>$carry + $item,10);
    echo "total is $total";
?>