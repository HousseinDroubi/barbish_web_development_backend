<!-- 
    The "foreach" loop is a special loop used to iterate over all elements of an array.
    It automatically goes through each element of the array, one by one.
    You can access just the value or both the key and the value.
    It’s simpler than using a for loop for arrays because you don’t need to manage indexes manually.
-->
<?php
    $array_names = ["Ali","Mouhammad","Samy","Sara","Hadeel"];
    // Using $key (index) and $name (value)
    foreach($array_names as $key => $name){
        echo "Name ".($key+1)." is: $name<br>";
    }
    echo "<hr>";

    // Using only $name (value)
    foreach($array_names as $name){
        echo "Name: $name<br>";
    }
    echo "<hr>";
?>
