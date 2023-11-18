<!-- View Product (1 Only) ///.PHP
Author: @MoraKhaledX -->

<!DOCTYPE html>
<head>
    <!-- Title & CSS Linking -->
    <title>Hype - Product Information</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css" type="text/css">

    <!-- FavIcon Import -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/png">
</head>

<body>
    <style>
        label {
            font-weight: bold;
        }
    </style>
    <h1>View Product</h1>
    <?php
    include "config.php";
    $ID = $_GET["ID"];

    $viewProducts = "SELECT * FROM catalogue WHERE ID = '$ID'";
    $result = mysqli_query($con,$viewProducts);
    if(!$result) {
        die("Error: ".mysqli_errno($con));
    }

    $row = mysqli_fetch_array($result);
    $ID = $row["ID"];
    $ProductName = $row["ProductName"];
    $Type = $row["Type"];
    $Availability = $row["Availability"];
    $Price = $row["Price"];
    $Image = $row["Image"];
    ?>
    <label>&#127380; Product ID:</label>
    <p>#<?php echo $ID; ?></p>
    <hr>
    <label>&#128271; Product Name:</label>
    <p><?php echo $ProductName; ?></p>
    <hr>
    <label>&#128717;&#65039; Type:</label>
    <p><?php echo $Type; ?></p>
    <hr>
    <label>&#128178; Price:</label>
    <p><?php echo $Price; ?>.00 EGP</p>
    <hr>
    <label>&#10004;&#65039; Availability:</label>
    <p><?php if($Availability == "Out Of Stock"): ?>
      <span style="color: red; font-weight: 500;"> <?php echo $Availability; ?></span>
        <?php else: ?>
          <span style="color: green; font-weight: 500;"> <?php echo $Availability; ?></span>
          <?php endif; ?>
      </p>
    <hr>
    <label>&#128444;&#65039; Images:</label>
    <p><?php echo $Image;?></p>
    <hr>
    <a href='products.php'>Create New Product</a>
    <a href='viewProducts.php'>View Products</a>


    <!-- Product Display CSS -->
    <style>
body {
  background-color: #f5f5e5;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 800px;
  margin: 0;
  padding: 0px;
}

.container h1 {
  font-size: 28px;
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 10px;
}

p {
  margin: 0 0 20px;
}

a {
    text-decoration: none;
    background: black;
    color: #fff;
    padding: 12px 24px;
    display: inline-block;
    border: 1px solid black;
    border-radius: 25px;
    transition: .2s;
}

a:hover {
    color: black;
    background: #f8f8f8;
    border: 1px solid black;
    transition: .2s;
}

img {
        width: 100%;
        height: 100%;
    }
</style>
</body>
</html>