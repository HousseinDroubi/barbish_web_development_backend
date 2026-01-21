<?php
    require_once __DIR__ . "/connection.php";

    $sql = "SELECT * FROM todos";
    $statement = $pdo->query($sql);

    $todos = $statement->fetchAll();

    http_response_code(200);
    echo json_encode([
        "result"=>"done",
        "todos"=>$todos
    ]);
?>