<?php

    $arr_1 = [10,20,30];
    $arr_2 = [40,50,60];

    foreach ($arr_1 as $a1) {
        echo $a1."<br>";
        foreach ($arr_2 as $a2) {
            echo $a2."<br>";
        }
        echo "<hr>";
    }
?>