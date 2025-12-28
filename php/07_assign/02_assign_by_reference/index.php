<?php
    $a = 10;
    $b = &$a; // now, both 'a' and 'b' are referencing to the same value

    $a = 30; // 'a' changed, so 'b' will change as well

    echo "a is $a<br>";
    echo "b is $b<br>";
    echo "<hr>";
    $b = 50;// 'b' changed, so 'a' will change as well 
    echo "a is $a<br>";
    echo "b is $b<br>";
?>