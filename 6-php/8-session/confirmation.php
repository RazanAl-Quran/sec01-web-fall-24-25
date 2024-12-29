<?php
$username = $_POST['name'];
$id = $_POST['id'];

session_start();
$_SESSION['username3'] = $username;
$_SESSION['id3'] = $id;

print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Hello
        <?php echo $_SESSION['username3'] ?>
    </h2>
    <a href="data.php"> Data page </a>
    <a href="destroy.php"> Destroy session </a>
</body>
</html>