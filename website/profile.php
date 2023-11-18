<!-- User Profile Page ///.PHP
Author: @MoraKhaledX -->

<?php
    session_start();
    if(!isset($_SESSION["loggedUser"])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<head>
    <!-- Title & CSS Linking -->
    <title>Hype - My Profile</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css" type="text/css">

    <!-- FavIcon Import -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/png">
</head>
<body>
    <?php
    include "config.php";
    $email = $_SESSION["loggedUser"];
    $viewUser = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($con,$viewUser);
    if(!$result) {
        echo "Error:".mysqli_error($con);
    }
    $row = mysqli_fetch_array($result);
    $fullname = $row["fullName"];
    $email = $row["email"];
    $username = $row["username"];
    ?>

    <!-- Display User Information -->
    <div class="container">
    <h1>User Profile Information</h1>
    <label>&#9997;&#65039; Full Name:</label>
    <p><?php echo $fullname; ?></p>
    <hr>
    <label>&#128231; Email Address:</label>
    <p><?php echo $email; ?></p>
    <hr>
    <label>&#128276; Username:</label>
    <p><?php echo '@'.$username; ?></p>
    <hr>

    <!-- Home & Logout Buttons -->
    <a href="index.php">Return To Home</a>
    <a href="logout.php">Logout</a>
    </div>

    <!-- Profile CSS -->
    <style>
body {
  background-color: #f5f5e5;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 500px;
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
</style>

    <!-- Ion Icon Linking -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>