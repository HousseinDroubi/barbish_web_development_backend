<?php
    require_once __DIR__ . "/connection.php";

    $todo_id = $_GET["todo_id"];

    $sql = "DELETE FROM todos WHERE id = :id";
    $statement = $pdo->prepare($sql);

    $statement->execute([
        ":id"=>$todo_id
    ]);

    http_response_code(200);
    echo json_encode([
        "result"=>"done",
    ]);
?>