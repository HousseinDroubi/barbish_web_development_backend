<?php
    interface Authenticatable{
        public function login();
        public function logout();
    }

    abstract class User{
        private $id;
        protected $name;

        public function __construct($id,$name){
            $this->id = $id;
            $this->name = $name;
        }

        public function displayUserInfo(){
            echo "user id: $this->id, user name: $this->name <br>";
        }

        abstract public function getRole();
    }

    class Student extends User implements Authenticatable{
        public function __construct($id, $name){
            parent::__construct($id,$name);
        }

        public function getRole(){
            echo "Student<br>";
        }

        public function login(){
            echo "Student is logging in ...<br>";
        }

        public function logout(){
            echo "Student is logging out ...<br>";
        }
    }

    class Instructor extends User implements Authenticatable{
        public function __construct($id, $name){
            parent::__construct($id,$name);
        }

        public function getRole(){
            echo "Instructor<br>";
        }

        public function login(){
            echo "Instructor is logging in ...<br>";
        }

        public function logout(){
            echo "Instructor is logging out ...<br>";
        }
    }
?>