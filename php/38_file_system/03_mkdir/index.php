<?php
    // mkdir() — Creates a directory.

    $path_of_my_dir = __DIR__ . "/my_dir";

    if(!file_exists($path_of_my_dir)){
        mkdir($path_of_my_dir);    
    }
?>
