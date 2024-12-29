<?php

$username = $_POST['name'];
$id = $_POST['id'];

// setcookie('username2',$username); // Cookie is deleted when the browser is closed

setcookie('username2',$username,time() +(86400 * 30)); // Cookie lasts 30 days

setcookie('id2',$id,time() +(86400 * 30)); // Cookie lasts 30 days
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello  <?php echo $_POST['name']. ' Your id is '. $_POST['id'];?></h1>
    <a href="viewCookie.php"> View cookies  </a>
</body>
</html>