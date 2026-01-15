<?php
    // In PHP, objects are assigned by reference, so here when $s2 = $s1; is used, both variables point to the same object in memory; any change made through one reference affects the other.
    require_once("classes.php");

    $s1 = new Square(10);
    $s1->printInfo(); // Side is 10

    $s2 = $s1;
    $s2->printInfo(); // Side is 10

    $s1->side = 20;
    $s1->printInfo();// Side is 20
    $s2->printInfo();// Side is 20
    
?>
