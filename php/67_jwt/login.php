<?php
    require_once __DIR__ . "/jwt.php";
    
    $id = 12;

    echo json_encode(
        [
            "id"=>$id,
            "token"=>MyJWT::generateToken($id)
        ]
    );

?>