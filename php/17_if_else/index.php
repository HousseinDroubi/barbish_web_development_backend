<!--
    if/else statement lets your program choose between two actions.
    PHP checks the condition inside if ( )
    If the condition is true, the code inside the first { } runs
    If the condition is false, the code inside else { } runs
 -->

<?php
    $number = -3;
    echo "number = $number<br>";
    
    if($number>=0){
        echo "$number is positive<br>";
    }else{
        echo "$number is negative<br>";
    }

    echo "Program ended";
?>

<!-- Run 1 -->
<!-- number = 10 -->
<!-- 10 is positive -->
<!-- Program ended -->

<!-- Run 2 -->
<!-- number = 0 -->
<!-- 0 is positive -->
<!-- Program ended -->

<!-- Run 3 -->
<!-- number = -14 -->
<!-- -14 is negative -->
<!-- Program ended -->