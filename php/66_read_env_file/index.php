<?php
    require_once("read_env.php");

    // $_ENV["ENVIRONMENT_VARIABLE_HERE"] allows you to access the value of ENVIRONMENT_VARIABLE_HERE inside .env file 
    $email = $_ENV["MY_EMAIL"];
    $password = $_ENV["MY_PASSWORD"];

    echo "Email is: $email<br>";
    echo "Password is: $password<br>";
?>