<?php

    // array = "variable which can hold more
    //  than one value at a time.
    $foods = array("apple", "orange", "banana", "coconut");

    // access array with index
    $foods[0] = "pineapple";

    // add elements to array
    array_push($foods, "pineapple", "kiwi");

    // remove from array
    array_pop($foods);

    // remove first item from array
    array_shift($foods);

    // reverse array item order
    $foods = array_reverse($foods);

    // show total number of items in array
    echo count($foods);

    // foreach loop
    foreach($foods as $food){
        echo $food . "<br>";
    }
?>
