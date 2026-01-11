<?php
    // move_uploaded_file is a PHP function that securely moves an uploaded file from its temporary location to a specified destination on the server.
    header("Access-Control-Allow-Origin: *"); // allow all origins
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); // allow these methods
    header("Access-Control-Allow-Headers: Content-Type"); // allow these headers

    $images_directory = __DIR__ . "/images";

    if(!file_exists($images_directory)){
        mkdir($images_directory);
    }
    $tmp_name = $_FILES["image"]["tmp_name"];
    $image_destination = $images_directory ."/" . $_FILES["image"]["name"];

    move_uploaded_file($tmp_name,$image_destination);
?>
