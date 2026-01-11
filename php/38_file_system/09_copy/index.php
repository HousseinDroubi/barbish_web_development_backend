<?php
    // copy() — Copies a file only (not directories).
    $notes_old_name = __DIR__ . "/notes.txt";
    $notes_new_name = __DIR__ . "/notes_1.txt";

    if(file_exists($notes_old_name)){
        copy($notes_old_name,$notes_new_name);
    }
?>
