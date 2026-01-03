<?php

    function tableOfMultiplication($number = 1, $limit = 10):void{
        for ($i=1; $i <= $limit; $i++) {
            echo "{$number}x{$i} = ".($number*$i)."<br>";
        }
        echo "----------------------------<br>";
    }

    tableOfMultiplication(); // This will do a table of multiplication of 1 from 1 to 10
    tableOfMultiplication(5);// This will do a table of multiplication of 5 from 1 to 10
    tableOfMultiplication(5,20); // This will do a table of multiplication of 5 from 1 to 20
?>