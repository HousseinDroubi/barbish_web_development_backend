<?php
// Trait collision: A conflict that occurs when multiple traits define a method with the same name.

    trait TraitOne{
        public function f1(){
            echo "f1 from TraitOne<br>";
        }
        public function f2(){
            echo "f2 from TraitOne<br>";
        }
    }

    trait TraitTwo{
        public function f1(){
            echo "f1 from TraitTwo<br>";
        }
        public function f3(){
            echo "f3 from TraitTwo<br>";
        }
    }

    class MyClass{
        use TraitOne, TraitTwo{
            TraitOne::f1 insteadOf TraitTwo;
        }
    }

    $c1 = new MyClass();
    $c1->f1();
    $c1->f2();
    $c1->f3();
?>