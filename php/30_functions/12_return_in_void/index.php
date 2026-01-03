<?php
    // return in a void function (stop function early):
    function doStuff($is_granted){
        // if($is_granted){
        //     echo "---------1----------<br>";
        // }

        // Instead, we can do the following:

        if(!$is_granted){
            return; // This will stop the function from being continued
        }

        echo "---------1----------<br>";
    }

    doStuff(true); // Will print ---------1----------
    doStuff(false); // Will print nothing

?>