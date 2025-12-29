<!--
    A ternary operator is a shortcut for a simple if/else.
    It lets you choose between two values in one line.
-->
<?php
    $number = -3;
    echo "number = $number<br>";
    
    // if($number>=0){
    //     echo "$number is positive<br>";
    // }else{
    //     echo "$number is negative<br>";
    // }
    
    //Instead, we can do the above using ternary operator 
    // Way 1
    // echo  $number>=0 ? "$number is positive<br>"  : "$number is negative<br>";
    
    // Way 2
    // $result = $number>=0 ? "positive" : "negative";
    // echo "$number is $result<br>";
    
    // Way 3
    echo "$number ". ($number>=0 ? "positive" : "negative") ."<br>";
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