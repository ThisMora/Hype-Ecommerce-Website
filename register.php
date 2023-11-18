<!-- Registration Page ///.PHP
Author: @MoraKhaledX -->

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Hype - Create An Account</title>
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
    <form onsubmit="return validateForm()" method="post" name="regForm" action="register_handler.php">
    <label>Full Name:</label>
    <div>
    <ion-icon name="add-circle"></ion-icon>
    <input type="text" name="fullname" placeholder="Full Name" size="25" required/><br>
    </div>
    <label>Username:</label>
    <div>
    <ion-icon name="person-add"></ion-icon>
    <input type="text" name="username" placeholder="Username" size="25" required/><br>
    </div>
    <label>Email:</label>
    <div>
    <ion-icon name="mail"></ion-icon>
    <input type="email" name="email" placeholder="Email Address" size="25" required/><br>
    </div>
    <label>Password:</label>
    <div>
    <ion-icon name="key"></ion-icon>
    <input type="password" name="password" placeholder="Create Password" size="25" required/><br>
    </div>
    <input type="reset" value="Clear All" class="clear-btn" onclick="clear2();" />
        <input type="submit" value="Register" class="sign-up"/>
        <a href="login.php" class="forgot">Already Have An Account? Login</a>
</form>
    </div>

    <!-- Ion Icon Linking -->
    <script src="js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>