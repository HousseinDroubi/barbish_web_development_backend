<?php

    // Named parameters let you specify which parameter gets which value, so order doesn’t matter.
    function tableOfMultiplication($number = 1, $limit = 10):void{
        for ($i=1; $i <= $limit; $i++) {
            echo "{$number}x{$i} = ".($number*$i)."<br>";
        }
        echo "----------------------------<br>";
    }

    tableOfMultiplication(20); // This will do a table of multiplication of 20 from 1 to 10
    tableOfMultiplication(limit:20); // This will do a table of multiplication of 1 from 1 to 20
    tableOfMultiplication(limit:5, number:13); // This will do a table of multiplication of 13 from 1 to 5
?>