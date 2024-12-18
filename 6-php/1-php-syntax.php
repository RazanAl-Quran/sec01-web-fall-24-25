<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hello from my first PHP app</h1>

    <?php
    $username = 'Mohammad';
    echo "<h1>Hello $username</h1>";

    // In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    echo "Hello World!<br>";

    $color = 'red';
    echo "my car is $color";

    echo "<h3> My car is " . $color . "</h3>";
    echo "<h3> My car is $color </h3>";

    $cars = array("bmw", "Tesla", "corvette");
    echo "my cars are $cars[0] $cars[1] <br>";

    for ($i = 0; $i < count($cars); $i++) {
        echo "<p class='car'>$cars[$i]</p>";
    }


    // ternary if
    $a = 10;
    $b = ($a < 10) ? "less" : "more";
    echo $b;

    // Associative Arrays
    $students = array("Ahmad" => "Computer Science", "Khaled" => "Data Science", "Ibrahim" => "Cyber Security");

    echo $students['Ahmad'];






    ?>

</body>

</html>