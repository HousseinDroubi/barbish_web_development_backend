<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); 
    header("Access-Control-Allow-Headers: Content-Type"); 

    $body = json_decode(file_get_contents("php://input"),true);
    
    if(array_key_exists("name",$body) && array_key_exists("age",$body)){
        $response = [
            "status"=> "success",
            "message"=>"Data received",
            "data"=> $body
        ];
        
        http_response_code(201);
        echo json_encode($response);
    }else{
        http_response_code(400);
        echo json_encode([
            "status"=>"error",
            "message"=>"kindly provide name and age"
        ]);
    }
?>