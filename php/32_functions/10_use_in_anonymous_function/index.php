<?php
    // use keyword lets an anonymous function access variables from the outside scope.
    // use keyword will take a copy of variable's value before defining the anonymous function exists
    $first_name ="Houssein";
    $last_name = "Droubi";

    $my_fn =  function () use ($first_name,$last_name){
        echo "Hi $first_name $last_name<br>"; // This will be: Hi Houssein Droubi because use keyword takes the last value of variable before anonymous function exists 
    };

    $first_name ="Mouhammad";
    $last_name = "Al-Haj";

    $my_fn();
?>