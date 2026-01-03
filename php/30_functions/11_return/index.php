<?php
    // return gives a value back from a function so you can use it.
    function sum($n1,$n2):int{
        return $n1+$n2;
    }

    $value = sum(10,20);
    echo $value;
    echo "<hr>";

    function getFullName($first_name, $last_name):string{
        return "$first_name $last_name";
    }

    echo getFullName("Houssein","Droubi");
?>