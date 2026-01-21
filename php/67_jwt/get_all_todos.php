<?php
    require_once __DIR__ . "/jwt.php";

    $headers = getallheaders();
    $token = explode(" ",$headers["Authorization"])[1];
    $result = MyJWT::verifyToken($token);
    if($result==null){
        http_response_code(400);
        echo json_encode([
            "result"=>"token_expired"
        ]);
    }else{
        // Query to db
        echo json_encode([
            "your_id"=>$result
        ]);
    }
?>