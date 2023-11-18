<!-- Register Handler File ///.PHP
Author: @MoraKhaledX -->

<?php
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// Password Hash Function
$passwordHashed = password_hash($password, PASSWORD_DEFAULT);

include "config.php";

$insertUser = "INSERT INTO users(fullName,email,password,username)
values(?,?,?,?)";

$stmt = mysqli_prepare($con,$insertUser);
mysqli_stmt_bind_param($stmt,"ssss",$fullname,$email,$passwordHashed,$username);

$result = mysqli_stmt_execute($stmt);
if($result == true) {
    echo "<div class='container'>
    <h2>User Successfully &#10004;&#65039;</h2>
    <h1>Created</h1>
    <p>Thank You For Registering &#10024;</p>
    <a href='index.php'>Return To Home</a>
    <a href='login.php'>Login</a>
    </div>";
}
else {
    echo "Error:".mysqli_stmt_error($stmt);
}
?>

<!-- Successful Registering CSS -->
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