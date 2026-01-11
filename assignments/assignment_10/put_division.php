<?php
    require_once("utils.php");
    $data = json_decode(file_get_contents("php://input"),true);
    $n1 = $data["n1"];
    $n2 = $data["n2"];

    echo division($n1,$n2);
?>