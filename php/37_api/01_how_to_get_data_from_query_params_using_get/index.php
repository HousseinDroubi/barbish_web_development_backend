<?php
// $_GET – A PHP superglobal array containing data sent via URL query parameters (HTTP GET).
  function summation($number_1, $number_2){
    return $number_1 + $number_2;
  }

  $number_1 = $_GET["number_1"];
  $number_2 = $_GET["number_2"];

  echo summation($number_1,$number_2);
?>