<?php
// $_POST is a PHP superglobal array that contains form data sent to a script via an HTTP POST request.
    function fullName($first_name,$last_name):string{
        return "$first_name $last_name";
    }
    // You are making sure that developer is sending first_name and last_name using POST method into form Data from frontend
    if(isset($_POST["first_name"]) && isset($_POST["last_name"])){

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        echo fullName($first_name,$last_name);
    }
?>