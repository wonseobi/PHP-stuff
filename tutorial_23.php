<?php

    // hashing = transforming sensitive data (password) into letters, numbers, and/or symbols via a mathematical process.

    $password = "mypassword";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash;

    if(password_verify("mypassword", $hash)){
        echo"You are logged in";
    }
    else{
        echo"Incorrect password";
    }
    
?>