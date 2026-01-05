<?php
    // Nested loops are loops inside another loop.
    //  The inner loop runs completely for each iteration of the outer loop.

    $computer_hardware = ["Mouse","Keyboard","Monitor"];
    $colors = ["Red","Green","Blue","Yellow"];

    echo "<ul>";
    foreach ($computer_hardware as $element) {
        echo "<li>".$element; 
            echo "<ul>";
            foreach ($colors as $color) {
                echo "<li>$color</li>";
            }
            echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
?>