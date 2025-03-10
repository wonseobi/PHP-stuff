<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tutorial_4.php" method="post">
        <label>Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    // $_GET, $_POST 
    //  Special variables used to collect data from an HTML
    //  form data is sent ot the file in the action attribute
    //  of <form> <form action="some_file.php" method="get">
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo"You have ordered {$quantity} x {$item}/s <br>";
    echo"Your total is: \${$total}";
    
    // $_GET 
    //  Data is appended to the url
    //  NOT SECURE
    //  char limit
    //  Bookmark is visble with values
    //  GET requests can be cached 
    //  Better for a search page

    // $_POST
    //  Data is packaged inside the
    //  body of the HTTP request
    //  MORE SECURE
    //  No data limit 
    //  Cannot bookmark
    //  GET requests are not cached
    //  Better for submitting credentials
?>