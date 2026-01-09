<?php
  // isset – Checks whether a variable is set and not null; returns true or false.
  if(isset($_GET["number_1"]) && isset($_GET["number_2"])){
    function summation($number_1, $number_2){
      return $number_1 + $number_2;
    }

    $number_1 = $_GET["number_1"];
    $number_2 = $_GET["number_2"];

    echo summation($number_1,$number_2);
  }
?>