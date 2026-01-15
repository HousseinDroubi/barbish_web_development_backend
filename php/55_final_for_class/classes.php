<?php
    // final for class means that this class cannot be inherited
    final class Person{
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
?>