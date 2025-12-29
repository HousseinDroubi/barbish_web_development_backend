<!--
    An if / else if / else statement lets your program choose between multiple options.
    PHP checks the first if condition.
    If it’s true, it runs that block and skips the rest.
    If it’s false, it checks the next else if condition.
    If none of the conditions are true, it runs the else block.
-->

<?php
    $number = 7;

    echo "number = $number<br>";

    if($number === 1){
        echo "I'ts Monday";
    }else if($number === 2){
        echo "I'ts Tuesday";
    }else if($number === 3){
        echo "I'ts Wednesday";
    }else if($number === 4){
        echo "I'ts Thursday";
    }else if($number === 5){
        echo "I'ts Friday";
    }else if($number === 6){
        echo "I'ts Saturday";
    }else{
        echo "I'ts Sunday";
    }

    echo "<br>Program ended<br>";
?>

<!-- Run 1 -->
<!-- number = 1 -->
<!-- It's Monday -->
<!-- Program ended -->

<!-- Run 2 -->
<!-- number = 2 -->
<!-- It's Tuesday -->
<!-- Program ended -->

<!-- ...... -->

<!-- Run 7 -->
<!-- number = 7 -->
<!-- It's Sunday -->
<!-- Program ended -->
