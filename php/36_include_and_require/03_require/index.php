<?php
  // require – Inserts and executes a specified PHP file; triggers a fatal error if the file is missing and stops the script.
  require("utils.php");
  echo "number is $number <br>"; // number is 50
  $number+=20;
  echo "number is $number <br>"; // number is 70
  require("utils.php");
  echo "number is $number <br>"; // number is 50
?>