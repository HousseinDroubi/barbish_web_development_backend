<?php

    // A default parameter is a value a function will use if you don’t give it a value when calling the function.
    function tableOfMultiplication($number, $limit = 10):void{
        for ($i=1; $i <= $limit; $i++) {
            echo "{$number}x{$i} = ".($number*$i)."<br>";
        }
        echo "----------------------------<br>";
    }

    tableOfMultiplication(20); // This will do a table of multiplication from 1 to 10
    tableOfMultiplication(20, 7); // This will do a table of multiplication from 1 to 7
?>