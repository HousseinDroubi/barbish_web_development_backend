<?php
    // is_dir() — Checks whether a path exists and is a directory.

    $path_of_notes_file = __DIR__ . "/notes.txt";
    $path_of_my_dir = __DIR__ . "/my_dir";

    // is_dir checks if a directory a real directory
   var_dump(is_dir($path_of_my_dir)); // true
   echo "<br>";
   var_dump(is_dir($path_of_notes_file)); // false
?>
