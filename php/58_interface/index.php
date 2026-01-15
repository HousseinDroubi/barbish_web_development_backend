<?php
    require_once("classes.php");

    $square = new Square(7);
    echo "Area is : " .$square->getArea() . "<br>";
    echo "Perimeter is : ". $square->getPerimeter() . "<br>";
    $square->info();
    $square->printNumberOfSides();
    echo "<hr>";

    $rectangle = new Rectangle(3,4);
    echo "Area is : " .$rectangle->getArea() . "<br>";
    echo "Perimeter is : ". $rectangle->getPerimeter() . "<br>";
    $rectangle->info();
    $rectangle->printNumberOfSides();
    echo "<hr>";


    $triangle = new Triangle(4,3,4,4,4);
    echo "Area is : " .$triangle->getArea() . "<br>";
    echo "Perimeter is : ". $triangle->getPerimeter() . "<br>";
    $triangle->info();
    $triangle->printNumberOfSides();
    echo "<hr>";
?>
