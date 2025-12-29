<!-- 
    "continue" is used to skip the current iteration of the loop and move to the next iteration. 
    The loop does not stop, it just jumps over the rest of the code in that iteration.
-->

<?php
    for ($counter=0; $counter <=50 ; $counter++) {
        if($counter==30 || $counter == 40){
            continue;
        }
        echo "<p> counter is: $counter<p>";
    }
?>
