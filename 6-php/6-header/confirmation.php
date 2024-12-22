<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- get the data from POST and then store the data in DB -->
     <!-- then direct the user to the Sign in page -->
      <?php echo $_POST['username'];
      header("Location: signin.php?username2=razan&id=123");
      
      ?>
</body>
</html>