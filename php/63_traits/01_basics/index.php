<?php
// Trait: A mechanism for code reuse that lets you include methods in multiple classes.

    trait TraitOne{
        public function f1(){
            echo "f1 from TraitOne<br>";
        }
        public function f2(){
            echo "f2 from TraitOne<br>";
        }
    }

    trait TraitTwo{
        public function f3(){
            echo "f3 from TraitTwo<br>";
        }
        public function f4(){
            echo "f4 from TraitTwo<br>";
        }
    }

    class MyClass{
        use TraitOne, TraitTwo;
        // Or you can do the following:
        // use TraitOne;
        // use TraitTwo;
    }

    $c1 = new MyClass();
    $c1->f1();
    $c1->f2();
    $c1->f3();
    $c1->f4();
?>