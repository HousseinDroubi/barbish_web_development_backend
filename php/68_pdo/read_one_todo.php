<?php
    require_once __DIR__ . "/connection.php";

    $todo_id = $_GET["todo_id"];

    $sql = "SELECT * FROM todos WHERE id = :id LIMIT 1";
    $statement = $pdo->prepare($sql);

    $statement->execute([
        ":id"=>$todo_id
    ]);

    $todo = $statement->fetch();

    http_response_code(200);
    echo json_encode([
        "result"=>"done",
        "todo"=>$todo
    ]);
?>