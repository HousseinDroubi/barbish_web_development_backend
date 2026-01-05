<?php
    function sayHi(){
        echo "Hi from void function";
    }

    // sayHi();
    function printFullName($first_name,$last_name){
        echo "$first_name $last_name";
    }

    // printFullName("Houssein","Droubi");

    function printAllNumbers(...$numbers){
        foreach ($numbers as $number) {
            echo "$number<br>";
        }
    }

    // printAllNumbers(10,20,30);
    // echo "<hr>";
    // printAllNumbers(10,20,30,40,50);

    function greetings($username = "Guest"){
        echo "Hello $username!<br>";
    }
    // greetings();
    // greetings("Houssein");
    // greetings("Ali");
    
    function printDetails($name,$age,$city){
        echo "$name is $age years old and lives in $city.<br>";
    }

    // printDetails(age:28, name:"Ali",city:"Baalback");
    // printDetails(name:"Ali",age:28, city:"Baalback");
    // printDetails(city:"Baalback",name:"Ali",age:28 );

    function multiplication($number_1,$number_2){
        return $number_1 * $number_2;
    }

    // echo multiplication(10,20);
    // echo "<br>";
    // echo multiplication(30,40);

    function printOddNumber($number){
        if($number%2==0){
            return;
        }
        echo $number;
    }

    printOddNumber(14);// Prints nothing
    printOddNumber(15);// Prints 15
?>