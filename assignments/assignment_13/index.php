<?php
    require_once("classes.php");
    $user1 = new Student("123","Houssein");
    $user1->displayUserInfo();
    $user1->login();
    $user1->logout();
    echo "<hr>";
    $user2 = new Instructor("124","Ali");
    $user2->displayUserInfo();
    $user2->login();
    $user2->logout();
?>
