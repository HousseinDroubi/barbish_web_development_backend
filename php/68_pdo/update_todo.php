<?php
    require_once __DIR__ . "/connection.php";

    $body = json_decode(file_get_contents("php://input"),true);
    $todo_id = $body["todo_id"];
    $todo_new_text = $body["todo_new_text"];

    $sql = "UPDATE todos SET text = :text WHERE id = :id;";
    $statement = $pdo->prepare($sql);

    $statement->execute([
        "id"=>$todo_id,
        ":text"=>$todo_new_text
    ]);

    http_response_code(200);
    echo json_encode([
        "result"=>"done"
    ]);
?>