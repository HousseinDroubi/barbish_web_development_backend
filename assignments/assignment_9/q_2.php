<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    function printArrayElements($array):void{
        foreach ($array as $value) {
            echo $value." ";
        }  
        echo "<br>";
    }

  function arrayOperationsPractice($array){
    // Task 1
    echo "Number of elements is: ".count($array)."<br>";

    // Task 2
    $reverse_array = array_reverse($array);
    printArrayElements($reverse_array);

    // Task 3
    array_push($array,10);
    printArrayElements($array);

    // Task 4
    $removed_last_element = array_pop($array);
    printArrayElements($array);

    // Task 5
    array_unshift($array,0);
    printArrayElements($array);

    // Task 6
    $removed_first_element = array_shift($array);
    printArrayElements($array);

    // Task 7
    $array_1 = array_map(fn($value)=> $value*2,$array);
    printArrayElements($array_1);
    
    // Task 8
    $even_numbers = array_filter($array,fn($element) => $element%2==0);
    printArrayElements($even_numbers);
    
    // Task 9
   $total = array_reduce($array,fn($carry,$element)=> $element + $carry,0);
    echo $total;
}


  arrayOperationsPractice([10,11,12,33,55,17]);
?>