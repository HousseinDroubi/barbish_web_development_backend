<!--
    A for loop is used to repeat a block of code a specific number of times.
    
    1) $counter = 1 → initialization
    2) Checks the condition $counter <= 3 → true → runs the code inside { }
    3) After the code runs, increment $counter++ (adds 1)
    4) Goes back to step 2
    5) Stops when $counter <= 3 becomes false
-->
<?php
    
    for($counter = 1; $counter<=3; $counter++){
        echo "<h3>This is number ". $counter." </h3>";
    }
    echo "<hr>";
?>
