<?php
    $student_name = "Mouhammad";
    $score = 70;
    $attendance_percentage = 75;
    $behavior = 4;

    echo "Name is $student_name<br>";
    echo "Score = $score<br>";
    echo "Attendance percentage = $attendance_percentage<br>";
    echo "Behavior score = $behavior<br>";

    echo "-------------------------------------------<br>";

    if($score<0 || $score>100 
        || $attendance_percentage<0 || $attendance_percentage>100
        || $behavior<1 || $behavior>5){
        echo "Invalid entries<br/>";
    }else{
        // Score is between 0 and 100
        // Attendance Percentage is between 0 and 100
        // Behavior is between 1 and 5

        $is_passed = false;

        if($score>=50 && $attendance_percentage>=75){
            $is_passed = true;
            echo "$student_name has PASSED<br/>";
        }else{
            echo "$student_name has FAILED<br/>";
        }

        $grade = "F";
        if($is_passed){
            if($score>=90){
                $grade = "A";
            }else if($score>=80){
                $grade = "B";
            }else if($score>=70){
                $grade = "C";
            }else if($score>=60){
                $grade = "D";
            }else {
                $grade = "E";
            }
            echo "Grade: $grade<br>";
        }

        switch ($behavior) {
            case 5:
                echo "Excellent behavior<br>";
                break;
            case 4:
                echo "Good behavior<br>";
                break;
            case 3:
                echo "Average behavior<br>";
                break;
            case 2:
                echo "Weak behavior<br>";
                break;
            default:
                echo "Bad behavior<br>";
                break;
        }

        if(($grade=="A" || $grade=="B") && $behavior>=3){
            echo "Commendation awarded<br>";
        }else if($is_passed && $behavior<=2){
            echo "Warning issued<br>";
        }else if(!$is_passed && $attendance_percentage<50){
            echo "Disciplinary notice<br>";
        }else{
            echo "No special action<br>";
        }

    }
?>