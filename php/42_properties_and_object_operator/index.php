<?php
    // Class properties: Variables defined inside a class that store data for objects created from it.
    class Person{
        // $name, $age, $is_married and $salary are class properties
        public $name;
        public $age;
        public $is_married;
        public $salary;
    }

    // Instances
    $person_1 = new Person();
    // Object operator (->): Used to access an object’s properties and methods in PHP.
    $person_1->name = "Houssein";
    $person_1->age = 28;
    $person_1->is_married = false;
    $person_1->salary = 600;

    $person_2 = new Person();
    $person_2->name = "Ali";
    $person_2->age = 28;
    $person_2->is_married = true;
    $person_2->salary = 800;

    // Print
    var_dump($person_1);
    echo "<hr>";
    var_dump($person_2);
?>