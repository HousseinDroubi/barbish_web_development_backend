<!-- 
    PHP first checks this condition:
    if($number>=1 && $number<=7)

    If false (the number is not between 1 and 7), it goes to the else block and prints:
    Wrong number

    If true (the number is between 1 and 7), it goes inside the first if to check the nested conditions.
-->
<?php
    $number = 2;

    echo "number = $number<br>";

    if($number>=1 && $number<=7){
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
    }else{
        echo "Wrong number";
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

<!-- Run 8 -->
<!-- number = 10 -->
<!-- Wrong number -->
<!-- Program ended -->