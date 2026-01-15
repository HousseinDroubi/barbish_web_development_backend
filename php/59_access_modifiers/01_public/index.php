<?php
    require_once("classes.php");

    $shape = new Shape(10);

    echo "Shape var is: " . $shape->shape_var . "<br>";
    echo "<hr>";

    $sqaure = new Square(12,5);
    $sqaure->printInfo();
?>
