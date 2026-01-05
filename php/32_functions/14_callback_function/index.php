<?php
    //A callback function is a function you pass as an argument to another function, so it can be “called back” later.
    
    //1) sum, sub, mul, div and rem are variables that contain anonymous functions
    $sum = fn($n1,$n2)=> $n1+$n2;
    $sub = fn($n1,$n2)=> $n1-$n2;
    $mul = fn($n1,$n2)=> $n1*$n2;
    $div = fn($n1,$n2)=> $n1/$n2;
    $rem = fn($n1,$n2)=> $n1%$n2;

    // calculator called higher order function
    // $fun called callback function
    function calculator($fun,$n1,$n2){
        echo $fun($n1,$n2);
    }

    // calculator is a higher order function
    // rem's anonymous function is a callback function
    calculator($rem,15,2);
?>