
<?php
    $text_1 = "   Hi there   ";

    $text_2 = trim($text_1); // trim will remove the empty spaces on both sides

    echo "text_1 is: $text_1";
    echo "<br>";
    echo "text_1 length is: ".strlen($text_1);
    echo "<br>";
    echo "text_2 is: $text_2";
    echo "<br>";
    echo "text_2 length is: ".strlen($text_2);
?>