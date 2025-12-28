<?php
    // = += -= *= /= %= **= 
    $a = 100;

    // $a = $a + 5; // This means, updated a, set a to old value + 5
    $a += 20;
    echo "a = $a<br>"; // a = 120
    $a /= 60;
    echo "a = $a<br>"; // a = 2
    $a *= 10;
    echo "a = $a<br>"; // a = 20
    $a -= 12;
    echo "a = $a<br>"; // a = 8
    $a %= 6;
    echo "a = $a<br>"; // a = 2
    $a **= 5;
    echo "a = $a<br>"; // a = 32
?>