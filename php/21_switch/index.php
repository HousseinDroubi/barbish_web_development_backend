<!--
    A switch statement is another way to check multiple conditions, like multiple if/else if.
    "break" keyword stops the switch once a matching case runs.
    Without break, PHP will continue running all the cases below until a case has a "break" keyword
-->
<?php
    $number = 1;

    echo "number = $number<br>";

    switch($number){
        case 1:
            echo "I'ts Monday";
            break;
        case 2:
            echo "I'ts Tuesday";
            break;
        case 3:
            echo "I'ts Wednesday";
            break;
        case 4:
            echo "I'ts Thursday";
            break;
        case 5:
            echo "I'ts Friday";
            break;
        case 6:
            echo "I'ts Saturday";
            break;
        case 7:
            echo "I'ts Sunday";
            break;
        default:
            echo "Wrong number";
            break;
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