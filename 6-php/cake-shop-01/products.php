<?php

require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h2>Products</h2>

    <div class="container">
        <div class="row">

            <?php

            $sql = "SELECT * FROM products;";
            $result = mysqli_query($conn, $sql);
            $allproducts = mysqli_fetch_all($result, MYSQLI_ASSOC);
            print_r($allproducts);


            foreach ($allproducts as $product) {
                $id = $product['id'];
                $product_name = $product['product_name'];
                $product_desc = $product['product_desc'];
                $product_image = $product['product_image'];
                $product_price = $product['product_price'];

                echo '
                <div class="card col-md-4 my-5 mx-auto" style="width: 18rem;">
                    <img src="' . $product_image . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $product_name . '</h5>
                        <p class="card-text">' . $product_desc . '</p>
                        <p class="card-text"> price: ' . $product_price . ' JD</p>
   
                        </div>
                        </div>
                        ';
               
            }

            ?>

        </div>
    </div>



</body>

</html>