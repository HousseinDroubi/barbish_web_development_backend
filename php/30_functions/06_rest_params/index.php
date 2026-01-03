<?php
    // rest parameters let a function accept any number of extra arguments as an array.
    // rest parameter MUST BE last one
    function sum(...$numbers):void{
        $total = 0;        
        foreach($numbers as $number){
            $total += $number;
        }
        echo $total."<br>";
    }


    sum(10,20); // 30
    sum(10,20,30); // 60
    sum(10,20,30,40); // 100
?>