<?php
    // Method chaining allows multiple methods to be called in a single statement by returning $this from each
    class Chaining{
        public function function1(){
            echo "Fun 1 called <br>";
            return $this;
        }
        
        public function function2(){
            echo "Fun 2 called <br>";
            return $this;
        }

        public function function3(){
            echo "Fun 3 called <br>";
            return $this;
        }
    }

?>