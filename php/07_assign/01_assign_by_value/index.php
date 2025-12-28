<?php
    $a = 10;
    $b = $a; // 'b' is independent from 'a' 

    $a = 30; // 'a' changed, so 'b' WILL NOT change

    echo "a is $a<br>";
    echo "b is $b<br>";
?>