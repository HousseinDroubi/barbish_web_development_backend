<!--
    A for loop is used to repeat a block of code a specific number of times.
    
    1) $counter = 0 → initialization
    2) Checks the condition $counter <= count($array_names) => Meaning checks the condition $counter<=5 → true → runs the code inside { }
    3) After the code runs, increment $counter++ (adds 1)
    4) Goes back to step 2
    5) Stops when $counter <= 5 becomes false
-->
<?php
    $array_names = ["Ali","Mouhammad","Samy","Sara","Hadeel"];

    for($counter = 0; $counter<count($array_names); $counter++){
        echo "Name ".($counter+1)." is: ".$array_names[$counter]."<br>";
    }
    echo "<hr>";

?>
