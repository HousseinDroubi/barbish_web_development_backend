<?php
    // unlink() — Deletes a file only (not directories).
    $notes_path = __DIR__ . "/notes.txt";

    if(file_exists($notes_path)){
        unlink($notes_path);
    }
?>
