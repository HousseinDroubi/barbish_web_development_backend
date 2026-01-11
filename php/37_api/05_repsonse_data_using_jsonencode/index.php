<?php
    // json_encode() is a PHP function that converts a PHP value (array or object) into a JSON-formatted string.
    function fullName($first_name,$last_name):string{
        return "$first_name $last_name";
    }
    // You are making sure that developer is sending first_name and last_name using POST method into form Data from frontend
    if(isset($_POST["first_name"]) && isset($_POST["last_name"])){

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    
    $array = [
        "result"=>"success",
        "full_name"=> fullName($first_name,$last_name)
    ];
        echo json_encode($array);
    }else{
        $array = [
            "result"=>"error",
            "error_type"=>"first_name and last_name must sent using POST method in form data"
        ];
        echo json_encode($array);
    }
?>
