<?php
    // Postfix : 
        // variable++ -> means, use the current value of variable then add 1 
        // variable-- -> means, use the current value of variable then subtract 1 
        // ++variable -> means, add 1 then use the current value of variable
        // --variable -> means, subtract 1 then use the current value of variable
    $a = 10;
    echo "a = ".$a++."<br>"; // a = 10
    echo "a = $a<br>"; // a = 11
    echo "<hr>";
    $b = 10;
    echo "b = ".++$b."<br>"; // b = 11
    echo "b = $b<br>"; // b = 11
    echo "<hr>";

    $c = 10;
    echo "c = ".$c--."<br>"; // c = 10
    echo "c = $c<br>"; // c = 9
    echo "<hr>";
    $d = 10;
    echo "d = ".--$d."<br>"; // d = 9
    echo "d = $d<br>"; // d = 9
    echo "<hr>";
?>