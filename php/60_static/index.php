<?php
    require_once("classes.php");

    $s1 = new Shape();
    $s2 = new Shape();
    $s3 = new Shape();
    $sq1 = new Square(10);
    $sq2 = new Square(20);

    echo "Number of shapes until now is: " . Shape::$counter;
?>
