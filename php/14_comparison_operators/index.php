<?php
    // Comparison operators output boolean, meaning either true or false
    // == -> comapre value equality
    // === -> comapre value equality and also data types
    // != -> comapre value equality
    // !== -> comapre value equality and also data types
    // > -> Greater than
    // >= -> -> Greater than or equal
    // < -> Less than
    // <= -> -> Less than or equal
    // <=>

    echo "<h5>== and ===</h5>";
    var_dump(5 == 5); // true
    echo "<br>";
    var_dump(5 == "5");// true
    echo "<br>";
    var_dump(5===5); // true
    echo "<br>";
    var_dump(5==="5"); // false
    echo "<hr>";

    echo "<h5>!= and !==</h5>";
    var_dump(5 != 5); // false
    echo "<br>";
    var_dump(5 != "5");// false
    echo "<br>";
    var_dump(5!==5); // false
    echo "<br>";
    var_dump(5!=="5"); // true
    echo "<hr>";

    echo "<h5>> and >=</h5>";

    var_dump(20>3+16); //true
    echo "<br>";
    var_dump(10>=2*4); //true
    echo "<br>";
    echo "<hr>";
    echo "<h5>< and <=</h5>";

    var_dump(20<3+16); //false
    echo "<br>";
    var_dump(10<=2*4); //false
    echo "<br>";
    echo "<hr>";
    echo "<h5><=></h5>";

    var_dump(100 <=> "100"); // 0
    echo "<br>";
    var_dump(110<=>100); // 1
    echo "<br>";
    var_dump(100<=>110); // -1
    echo "<br>";
?>