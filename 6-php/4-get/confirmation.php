<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_GET;
    echo "<h2>Hello ".$_GET['username']."</h2>";
    echo "<h3>Hello ".$_GET['id']."</h3>";
    ?>
</body>
</html>