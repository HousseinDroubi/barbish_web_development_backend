<?php
    class Person{
        public $name;
        public $age;
        public $is_married;
        public $salary;

        // Methods: Functions defined inside a class that describe the behavior or actions of an object.
        public function sayHi(){
            echo "Hi";
        }
    }

    // Instances
    $person_1 = new Person();
    $person_1->name = "Houssein";
    $person_1->age = 28;
    $person_1->is_married = false;
    $person_1->salary = 600;

    $person_2 = new Person();
    $person_2->name = "Ali";
    $person_2->age = 28;
    $person_2->is_married = true;
    $person_2->salary = 800;

    $person_1->sayHi();
    echo "<br>";
    $person_2->sayHi();
?>