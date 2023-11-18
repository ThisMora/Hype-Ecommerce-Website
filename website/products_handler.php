<!-- Product Handler File ///.PHP
Author: @MoraKhaledX -->

<?php
$ID = $_POST["ID"];
$ProductName = $_POST["ProductName"];
$Type = $_POST["Type"];
$Availability = $_POST["Availability"];
$Price = $_POST["Price"];
$Image = $_POST["Image"];

include "config.php";

$insertProduct = "INSERT INTO catalogue (ID,ProductName,Type,Price,Availability,Image) value('$ID','$ProductName','$Type','$Price','$Availability','$Image')";
$result = mysqli_query($con,$insertProduct);

if($result == true) {
    echo "<div class='container'>
    <h2>Product Successfully &#10004;&#65039;</h2>
    <h1>Added</h1>
    <p>Thank You For Adding &#128722;</p>
    <a href='index.php'>Return To Home</a>
    <a href='products.php'>Add Another Product</a>
    <a href='viewProducts.php'>View Products</a>
    </div>";
}
else {
    echo"<div class='container'>
    <h2>Failed To Add Product &#10060;</h2>
    <h1>404</h1>
    <p>P L E A S E &#129398; T R Y &#129398; A G A I N...</p>
    <a href='index.php'>Return To Home</a>
    <a href='products.php'>Add Product</a>
    <a href='viewProducts.php'>View Products</a>
    </div>".mysqli_errno($con);
}
?>

<!-- Product Add Failure/Success CSS -->
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "montserrat", sans-serif;
        min-height: 100vh;
        background-color: #f5f5e5;
    }
    .container {
        width: 100%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        color: black;
    }
    .container p {
        margin-top: -15px;
    }
    .container h1 {
        font-size: 160px;
        margin: 0;
        font-weight: 900;
    }
    .container h2{
        margin-bottom: -5px;
    }
    .container a {
        text-decoration: none;
        background: black;
        color: #fff;
        padding: 12px 24px;
        display: inline-block;
        border: 1px solid black;
        border-radius: 25px;
        transition: .2s;
    }
    .container a:hover {
        color: black;
        background: white;
        border: 1px solid black;
        transition: .2s;
    }
</style>