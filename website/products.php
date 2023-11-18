<!-- Insert Products Page ///.PHP
Author: @MoraKhaledX -->

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<head>
    <!-- Title & CSS Linking -->
    <title>Hype - Products Modification</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css" type="text/css">

    <!-- FavIcon Import -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/png">
</head>

<body>
    <h1>Insert Products</h1>
    <form method="post" action="products_handler.php">
        <label>Product ID:</label>
        <input type="text" name="ID">
        <br>
        <label>Product Name:</label>
        <input type="text" name="ProductName">
        <br>
        <label>Price:</label>
        <input type="text" name="Price">
        <br>
        <label>Type:</label>
        <input type="radio" name="Type" value="Hoodie">Hoodie
        <input type="radio" name="Type" value="T-Shirt">T-Shirt
        <input type="radio" name="Type" value="Cap">Cap
        <input type="radio" name="Type" value="Shoes">Shoes
        <br>
        <label>Availability:</label>
        <input type="radio" name="Availability" value="In Stock">Yes
        <input type="radio" name="Availability" value="Out Of Stock">No
        <br>
        <label>Images:</label>
        <input type="file" name="Image">
        <br>
        <input type="submit" value="Add Product">
        <input type="reset" value="Clear">
    </form>

    <style>
body {
    background-color: #f5f5e5;
    font-family: Arial, sans-serif;
}
form {
  max-width: 600px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
}

h1 {
  text-align: center;
}

label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: 600;
}

input[type="text"],
input[type="radio"],
input[type="file"],
input[type="submit"],
input[type="reset"] {
  display: block;
  margin-bottom: 10px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

input[type="radio"] {
  display: inline-block;
  margin-right: 10px;
}

input[type="submit"],
input[type="reset"] {
        background: black;
        color: #fff;
        padding: 9px 20px;
        display: inline-block;
        border: 1px solid black;
        border-radius: 19px;
        transition: .2s;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
  background-color: white;
  color: black;
  border: 1px solid black;
  transition: .2s;
}

input[type="file"] {
  border: none;
  padding: 0;
  margin-bottom: 0;
  font-size: 14px;
}

input[type="file"]::file-selector-button {
  border: 1px solid #f1f1f1;
  border-radius: 5px;
  padding: 5px;
  background-color: #f1f1f1;
  color: #333;
  cursor: pointer;
}

input[type="file"]::file-selector-button:hover {
  background-color: #ccc;
}

    </style>
</body>
</html>