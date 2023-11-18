<!-- Login Page ///.PHP
Author: @MoraKhaledX -->

<!DOCTYPE html>
<head>
    <!-- Head Start -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- CSS Linking & Page Title -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Hype - Account Login</title>

    <!-- FavIcon Import -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/font.css">
</head>


<body>
    <div class="container">
         <div class="box">
            <div class="box-img">
            <img src="assets/images/HYPE-LOGO.png" alt=""></div>

    <!-- Login Form Start -->
    <form onsubmit="" method="post" name="regForm" action="login_handler.php">
        <?php
        setcookie("Amr","12345",time()+364);
        ?>
    <label>Email:</label>
    <div>
    <ion-icon name="mail"></ion-icon>
    <input type="email" name="email" placeholder="Email Address" size="25" required/><br>
    </div>
    <label>Password:</label>
    <div>
    <ion-icon name="key"></ion-icon>
    <input type="password" name="password" placeholder="Enter Password" size="25" required/><br>
    </div>
    <input type="reset" value="Clear All" class="clear-btn" onclick="clear2();" />
        <input type="submit" value="Login" />
        <a href="register.php" class="forgot">New Member? Register Now</a>

    <!-- Login Form End -->
    </form>
        <? ob_end_flush(); ?>
      </div>

  <!-- Ion Icon Linking -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>