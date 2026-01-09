<?php
  // require_once – Same as require, but ensures the file is included only once per script execution.
  require_once("utils.php");
  echo "number is $number <br>"; // number is 50
  $number+=20;
  echo "number is $number <br>"; // number is 70
  require_once("utils.php"); // This has no meaning
  echo "number is $number <br>"; // number is 50
?>