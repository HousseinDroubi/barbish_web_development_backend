<?php
    // rmdir() — Removes an empty directory.

    $path_of_my_dir = __DIR__ . "/my_dir";

    if(file_exists($path_of_my_dir)){
        rmdir($path_of_my_dir);    
    }
?>
