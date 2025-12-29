<!--
    if statement in PHP is used to make a decision.
    PHP checks the condition inside if ( )
    If the condition is true, the code inside { } runs
    If it’s false, PHP skips it
 -->
<?php
    $number = 100;
    echo "number = $number<br>";
    
    if($number>=0){ //
        echo "$number is positive<br>";
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
<!-- Program ended -->