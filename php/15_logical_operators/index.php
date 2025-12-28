<?php
    // Logical operators output boolean, meaning either true or false
    echo "<h4>&&</h4>";
    // && -> All conditions must be true to output true, (the minimum number of conditions using '&&' is two)
    $a1 = true;
    $a2 = true;
    var_dump($a1 && $a2); // true

    echo "<hr>";
    echo "<h4>||</h4>";
    // || -> At least one condition must be true to output true, (the minimum number of conditions using '||' is two)

    $b1 = true;
    $b2 = false;
    var_dump($b1 || $b2); // true

    echo "<hr>";
    echo "<h4>!</h4>";
    // ! -> Flip the answer,  the number of conditions using '!' is one 
    //  true => false
    //  -> false => true

    $c1 = true;
    var_dump(!$c1); // false
    echo "<br>";
    $c2 = false;
    var_dump(!$c2); // true
    
    echo "<hr>";

    echo "<h4>and</h4>";
    // and -> Same as &&, but && has higher precedence,  (the minimum number of conditions using 'and' is two)
    $d1 = true;
    $d2 = true;
    var_dump($a1 and $a2); // true

    echo "<hr>";

    echo "<h4>or</h4>";
    // or -> Same as ||, but || has higher precedence,  (the minimum number of conditions using 'or' is two)
    $e1 = true;
    $e2 = false;
    var_dump($a1 or $a2); // true
?>