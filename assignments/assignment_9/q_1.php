<?php
    function processNumbers($array, $callback){
        echo "[";
        foreach ($array as $key => $element) {
            echo $callback($element) . ($key+1==count($array) ? "" : ",");
        }
        echo "]";
    }

    processNumbers([10,20,30,40,50],fn($element)=>$element*2);
?>
