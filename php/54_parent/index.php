<?php
    require_once("classes.php");
    
    $s1 = new Student("Houssein",28,3.2);
    echo $s1->name ."<br>";
    echo $s1->age ."<br>";
    echo $s1->gpa ."<br>";
    echo $s1->info();

    echo "<hr>";
    $e1 = new Employee("Ali",28,700);
    echo $e1->name ."<br>";
    echo $e1->age ."<br>";
    echo $e1->salary ."<br>";
    echo $e1->info();
?>