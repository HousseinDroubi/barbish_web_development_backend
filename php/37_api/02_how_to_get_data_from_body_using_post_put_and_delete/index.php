<?php
  // json_decode(file_get_contents("php://input"), true) – Reads raw HTTP request body and decodes JSON data into an associative array.
  function summation($number_1, $number_2){
    return $number_1 + $number_2;
  }
  $array = json_decode(file_get_contents("php://input"),true);
  
  echo summation($array["number_1"],$array["number_2"]);
?>