<?php
    $score = 200;


    echo "Score = $score<br>";

    if($score>=0 && $score<=100){
        if($score>=60){
            echo "Success<br>";
        }else{
            echo "Failed<br>";
        }

        if($score>=90){
            echo "Grade is A";
        }else if($score>=80){
            echo "Grade is B";
        }else if($score>=70){
            echo "Grade is C";
        }else if($score>=60){
            echo "Grade is D";
        }else{
            echo "Grade is F";
        }
    }else{
        echo "Invalid score <br>";
    }
?>


<!-- Run 1 -->

<!-- Score = 98 -->
<!-- Success -->
<!-- Grade is A -->


<!-- Run 2 -->

<!-- Score = 87 -->
<!-- Success -->
<!-- Grade is B -->

<!-- Run 3 -->

<!-- Score = 75 -->
<!-- Success -->
<!-- Grade is C -->

<!-- Run 4 -->

<!-- Score = 69 -->
<!-- Success -->
<!-- Grade is D -->

<!-- Run 5 -->

<!-- Score = 55 -->
<!-- Failed -->
<!-- Grade is F -->