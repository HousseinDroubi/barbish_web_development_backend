<?php
    $c1 = 10;
    $counter = 1;
    echo "c1 = $c1<br>";
    while ($counter<=$c1) {
        echo $c1 != $counter ? "$counter," : "$counter<br>";
        $counter++;
    }

    echo "-------------------------------------------<br>";
    $c2 = 15;
    echo "c2 = $c2<br>";
    $counter = $c2;
    do {
        echo $counter != 1 ? "$counter-" : "$counter<br>";
        $counter--;
    } while ($counter>=1);
    echo "-------------------------------------------<br>";
    $c3 = 5;
    echo "c3 = $c3<br>";
    for ($i=1; $i <= 10; $i++) {
        echo "{$c3}x{$i} = ".($c3*$i)."<br>";
    }
    echo "-------------------------------------------<br>";
    $arr = ["HTML","CSS","JS"];
    foreach ($arr as $key => $value) {
        echo "$key -> $value<br>";
    }
    echo "-------------------------------------------<br>";
    foreach ($arr as $value) {
        echo "$value<br>";
    }
?>