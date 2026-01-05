<?php
    // A function is a block of code that does a specific task and can be used again.
    // A void function is a function that runs code but does not return a value.
    function tableOfMultiplication():void{
        $number = 10;
        for ($i=1; $i <= 10; $i++) {
            echo "{$number}x{$i} = ".($number*$i)."<br>";
        }
        echo "----------------------------<br>";
    }

    tableOfMultiplication();
?>