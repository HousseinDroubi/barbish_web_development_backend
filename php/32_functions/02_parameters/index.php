<?php

    // Parameters are values you give to a function so it can use them.
    // The order of parameters matters unless they are named parameters (PHP 8+).

    // Here, $number and $limit are the parameters
    function tableOfMultiplication($number, $limit):void{
        for ($i=1; $i <= $limit; $i++) {
            echo "{$number}x{$i} = ".($number*$i)."<br>";
        }
        echo "----------------------------<br>";
    }

    tableOfMultiplication(20, 5); // $number is 20 and $limit is 5
?>