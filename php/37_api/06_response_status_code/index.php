<?php

    // http_response_code() is a PHP function used to get or set the HTTP status code sent in the response.

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
        http_response_code(200);
        echo json_encode($array);
    }else{
        // Client didn't send first_name and last_name in an accepted way
        http_response_code(400);
        $array = [
            "result"=>"error",
            "error_type"=>"first_name and last_name must sent using POST method in form data"
        ];
        echo json_encode($array);
    }
?>
