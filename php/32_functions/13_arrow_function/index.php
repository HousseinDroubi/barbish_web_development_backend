<?php
    // An arrow function is a shorter syntax for a function, mainly used for one-line functions    // arrow function must return a value
    // arrow function must be anonymous

    // $sum = fn($n1,$n2){
    //     return $n1+$n2;
    // };

    // Instead, we can do the following:
    $sum = fn($n1,$n2) => $n1+$n2;

    echo $sum(10,20);
?>