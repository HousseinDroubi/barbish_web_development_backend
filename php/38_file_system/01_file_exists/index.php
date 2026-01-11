<?php
    // file_exists() — Checks whether a file or directory exists.

    $path_of_notes_file = __DIR__ . "/notes.txt";
    $path_of_my_dir = __DIR__ . "/my_dir";

    // file_exists can be used for file and directory (folder)
   var_dump(file_exists($path_of_my_dir));
?>
