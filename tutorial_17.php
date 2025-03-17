<?php
    $username = array("Won", "Seob", "Lee");
    $phone = "123-456-7890";

    // $username = strtolower($username);

    // $username = strtoupper($username);

    // $username = trim($username);

    // $username = str_pad($username, 20, "X");

    // $phone = str_replace("-","/",$phone);

    // $username = strrev($username);

    // $username = str_shuffle($username);

    // $equals = strcmp($username, "Bro Code");

    // $count = strlen($phone); 

    // $index = strpos($username, " ");

    // $firstname = substr($username, 0, 3);
    // $last_name = substr($username, 4);

    // $fullname = explode(" ", $username);

    $username = implode("-", $username);

    echo $username;
