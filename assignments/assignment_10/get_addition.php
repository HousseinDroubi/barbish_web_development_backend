<?php
    if(isset($_GET["n1"]) && isset($_GET["n2"])){
        require_once("utils.php");
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        echo addition($n1,$n2);
    }
?>