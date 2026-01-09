<?php
// include – Inserts and executes a specified PHP file; emits a warning if the file is missing, but the script continues.
  include("utils.php");
  echo "number is $number <br>"; // number is 50
  $number+=20;
  echo "number is $number <br>"; // number is 70
  include("utils.php"); // $number has been reset
  echo "number is $number <br>"; // number is 50
?>