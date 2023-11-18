<!-- View All Products Page ///.PHP
Author: @MoraKhaledX -->

<!DOCTYPE html>
<head>
    <!-- Title & CSS Linking -->
    <title>Hype - Products Catalogue</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css" type="text/css">

    <!-- FavIcon Import -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/png">
</head>

<body>
    <h1>View Products</h1>
    <table border="1">
        <tr>
            <td><strong>Product ID</strong></td>
            <td><strong>Product Name</strong></td>
            <td><strong>Price</strong></td>
            <td><strong>Type</strong></td>
            <td><strong>Availability</strong></td>
            <td><strong>Details</strong></td>
        </tr>
    <?php
    include "config.php";

    $viewProducts = "SELECT * FROM catalogue";
    $result = mysqli_query($con,$viewProducts);
    if(!$result) {
        die("Error: ".mysqli_errno($con));
    }

    while($row = mysqli_fetch_array($result)){;
    echo "
        <tr>
            <td> #".$row["ID"]."</td>
            <td>".$row["ProductName"]."</td>
            <td>".$row["Price"].".00 EGP</td>
            <td>".$row["Type"]."</td>
            <td>".$row["Availability"]."</td>
            <td><a href='viewProduct.php?ID=".$row["ID"]."'>View More</a></td>
        </tr>
    ";
    }
    ?>
     </table>
     <div class="btn">
     <a href='products.php'>Create New Product</a>
    <a href='viewProducts.php'>View Products</a>
</div>


<!-- Table Styling -->
<style>
    body {
        background-color: #f5f5e5;
        font-family: Arial, sans-serif;
    }
    h1 {
        font-size: 30px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 16px;
        margin-bottom: 20px;
    }
    
    th, td {
        padding: 10px;
        text-align: center;
    }

    tr {
        background-color: #f5f5f5;
    }
    
    th {
        background-color: #ddd;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    tr:hover {
        background-color: #ddd;
    }
    
    td:last-child {
        text-align: center;
    }
    
    table a {
        text-decoration: none;
        color: blue;
    }
    
    table a:hover {
        text-decoration: underline;
    }

    .btn {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn a {
    text-decoration: none;
    margin-right: 10px;
    background: black;
    color: #fff;
    padding: 12px 24px;
    display: inline-block;
    border: 1px solid black;
    border-radius: 25px;
    transition: .2s;
    }

    .btn a:hover {
        color: black;
        background: #f8f8f8;
        border: 1px solid black;
        transition: .2s;
    }

</style>

</body>
</html>