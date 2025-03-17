<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="foods[]" value="Hamburguer">
        Hamburguer <br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog <br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){

        $foods = $_POST["foods"];
        echo $foods;
    }


    // if(isset($_POST["submit"])){

    //    if(isset($_POST["pizza"])){
    //         echo"Wow you DON'T like pizza? <br>";
    //    }
    //    if(empty($_POST["hamburguer"])){
    //         echo"Wow you DON'T like hamburguers? <br>";
    //    }
    //    if(empty($_POST["hotdog"])){
    //         echo"Wow you DON'T like hotdogs? <br>";
    //    }
    //    if(empty($_POST["taco"])){
    //         echo"Wow you DON'T like tacos? <br>";
    //    }
    // }
?>