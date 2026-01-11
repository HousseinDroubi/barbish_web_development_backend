<?php
    // rename() — Renames or moves a file or directory.

    $my_dir_old_name = __DIR__ . "/my_dir";
    $my_dir_new_name = __DIR__ . "/my_dir_1";

    if(file_exists($my_dir_old_name)){
        rename($my_dir_old_name,$my_dir_new_name); // works for file and directory
    }

    $notes_old_name = __DIR__ . "/notes.txt";
    $notes_new_name = __DIR__ . "/notes_1.txt";

    if(file_exists($notes_old_name)){
        rename($notes_old_name,$notes_new_name);
    }
?>
