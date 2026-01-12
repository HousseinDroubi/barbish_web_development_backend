<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    class Person{
        public $name;
        public $age;
        public $is_married;
        public $salary;

        public function sayHi(){
            // $this: Refers to the current object instance, allowing access to its own properties and methods from within the class.
            echo "Hi, my name is $this->name, I'm $this->age years old and my salary is $this->salary";
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