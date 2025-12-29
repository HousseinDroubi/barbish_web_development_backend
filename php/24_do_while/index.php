<!-- 
    A do…while loop is similar, but it runs the code at least once, even if the condition is false.
    In the following example:
    1- PHP runs the code inside do first, without checking the condition.
    2- Then it checks $counter <= 100.
    3- If true, it repeats; if false, it stops.
-->

<?php
    $counter = 1;

    do{
        echo "<h3>This is number ". $counter++." </h3>";
    }while($counter<=100);
    
?>
