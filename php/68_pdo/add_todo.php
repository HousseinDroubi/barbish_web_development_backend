<?php
    require_once __DIR__ . "/connection.php";

    $body = json_decode(file_get_contents("php://input"),true);
    $todo_text = $body["todo_text"];

    $sql = "INSERT INTO todos(text) VALUES (:text)";
    $statement = $pdo->prepare($sql);

    $statement->execute([
        ":text"=>$todo_text
    ]);

    http_response_code(201);
    echo json_encode([
        "result"=>"done",
        "last_todo_inserted"=>$pdo->lastInsertId()       
    ]);
?>