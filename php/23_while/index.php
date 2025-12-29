<!-- 
    A while loop repeats a block of code as long as a condition is true.
    In the following example:
    1- PHP checks $counter <= 100.
    2- If true, it runs the code inside { }.
    3- After running, it goes back and checks the condition again.
    4- Stops when the condition becomes false.
-->
<?php
    $counter = 1;

    while($counter<=100){
        echo "<h3>This is number ". $counter++." </h3>";
    }
    
?>
