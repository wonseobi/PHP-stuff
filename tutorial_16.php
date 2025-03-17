<?php
    // function = write some code once, reuse it when you need it 
    //      type () after function name to invoke it.
    
    function happy_birthday($first_name, $age){
        echo"Happy Birthday dear {$first_name} <br>";
        echo"Happy Birthday to you <br>";
        echo"Happy Birthday dear {$first_name} <br>";
        echo"You are {$age} years old! <br><br>";

        return;
    }

    happy_birthday("Spongebob", 20);
    happy_birthday("Mr. Krabs", 45);
    happy_birthday("Squidward", 30);
?>