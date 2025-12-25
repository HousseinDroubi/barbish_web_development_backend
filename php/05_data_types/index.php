<?php
/*
    Data types in php are:
    1- int
    2- float
    3- string (text)
    4- bool (true or false)
    5- array (sequence of element)
    6- othertypes
*/ 

    $v1 = 4;
    var_dump($v1); // var_dump in PHP is a tool that shows what a variable contains with its data type
    echo "<br>";
    $v2 = 3.5;
    var_dump($v2); 
    echo "<br>";
    $v3 = true;
    var_dump($v3);
    echo "<br>";
    $v4 = "John Doe";
    var_dump($v4);
    echo "<br>";
    $array = ["name_1"=>"Houssein","name_2"=>"Ali","name_3"=>"Walid", 0=>10, 1=>20, 2=>30];
    var_dump($array);
    echo "<br>";
    echo "Accessing name_1 from array ".$array["name_1"];
    echo "<br>";
?>