<?php
// The parent keyword is used to access and call parent class methods and attributes from within a subclass.
    class Person{
        public $name;
        public $age;
        public function __construct($name,$age){
            echo "<h5> Hi from Person __construct</h5>";
            $this->name = $name;
            $this->age = $age;
        } 

        public function info():string{
            return "Hi, my name is $this->name and I'm $this->age yers old";
        }
    }

    class Student extends Person{
        public $gpa;
        public function __construct($name,$age,$gpa){
            parent::__construct($name,$age);
            echo "<h5> Hi from Student __construct</h5>";
            $this->gpa = $gpa;
        }

        public function info():string{
            return parent::info() . " and my gpa is $this->gpa<br>";
        }
    } 

    class Employee extends Person{
        public $salary;
        public function __construct($name,$age,$salary){
            parent::__construct($name,$age);
            echo "<h5> Hi from Employee __construct</h5>";
            $this->salary = $salary;
        }
        
        public function info():string{
            return parent::info() ." and I'm $this->age yers old and my salary is $this->salary$<br>";
        }
    }
?>