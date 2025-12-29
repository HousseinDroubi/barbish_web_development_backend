<!-- 
    "break" keyword in loop is used to exit a loop immediately,
    no matter if the loop condition is still true.
-->

<?php
    for ($counter=0; $counter <=50 ; $counter++) {
        if($counter==30){
            break;
        }
        echo "<p> counter is: $counter<p>";
    }
?>
