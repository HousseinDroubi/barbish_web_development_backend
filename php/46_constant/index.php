<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    class Math{
        // const keyword: Used to define class constants—fixed values that belong to the class itself and cannot be changed.
        const PI = 3.14159;
    }

    // $m1 = new Math();
    // echo $m1::PI; // :: called scope resolution operators
    // echo "<hr>";
    echo Math::PI; // This means that you can access constants without creating instances by calling it through class directly
?>