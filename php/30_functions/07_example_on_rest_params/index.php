<?php
    function printDetails($first_name, $last_name, ...$skills){

        echo "Hi, $first_name $last_name, your skills are as follows: <br>";
        echo "<ul>";
        foreach ($skills as $skill) {
            echo "<li>$skill</li>";
        }
        echo "</ul>";
        
        echo "-------------------------------------------<br>";
    }

    printDetails("Ali","Daher","HTML", "CSS", "JS", "SQL", "PHP");
    printDetails("Walid", "Chehne", "React", "ExpressJS", "MongoDB");
?>