<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tutorial_exercise_5.php" method="post">
        <label for="">Radius: </label>
        <input type="text" name="radius">
        <input type="Submit" value="ENTER">
    </form><br>
</body>
</html>


<!-- PHP Script -->
<?php
    $radius = $_POST["radius"];

    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * $radius ** 2;
    $area = round($area, 2);

    $volume = 4/3 * pi() * $radius ** 3;
    $volume = round($volume, 2);

    echo"The circumference total is: {$circumference}cm <br>";
    echo"The area total is: {$area}cm^2 <br>";
    echo"The volume total is: {$volume}cm^3 <br>";

?>