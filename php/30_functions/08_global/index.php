<?php
    // global keyword lets a function access variables defined outside the function (in the global scope).
    // global keyword uses last variable's value 
    $first_name = "Mouhammad";
    $last_name = "Al-Amin";

    function printDetails(){
        global $first_name, $last_name;
        echo "Hi $first_name $last_name";
    }

    // $first_name = "Houssein";// If this is uncommented, $first_name inside printDetails() will become "Houssein"
    // $last_name = "Al-Haj";// If this is uncommented, $last_name inside printDetails() will become "Al-Haj"

    printDetails();
?>