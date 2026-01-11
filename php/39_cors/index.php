<?php
    // CORS (Cross-Origin Resource Sharing) is a browser security mechanism that controls whether a web page can request resources from a different origin (domain, protocol, or port).
    header("Access-Control-Allow-Origin: *"); // allow all origins
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); // allow these methods
    header("Access-Control-Allow-Headers: Content-Type"); // allow these headers

    echo "Hi";
?>
