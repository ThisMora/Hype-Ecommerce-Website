<!-- Login Handler Page ///.PHP
Author: @MoraKhaledX -->

<?php

$email = $_POST["email"];
$password = $_POST["password"];

include "config.php";

$login = "SELECT email,password FROM users WHERE email=?";
$stmt = mysqli_prepare($con,$login);
mysqli_stmt_bind_param($stmt,"s",$email);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

$count = mysqli_stmt_num_rows($stmt);

if($count == 1) {
    mysqli_stmt_bind_result($stmt,$rowEmail,$rowPassword);
    mysqli_stmt_fetch($stmt);
    if(password_verify($password,$rowPassword)){
    session_start();
    $_SESSION["loggedUser"] = $email;
    header('Location: profile.php');
}
    }
    echo "<div class='container'>
    <h2>Invalid Email Or Password &#129397;</h2>
    <h1>404</h1>
    <p>P L E A S E &#129398; T R Y &#129398; A G A I N...</p>
    <a href='index.php'>Return To Home</a>
    <a href='login.php'>Login</a>
    </div>";


ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $sql = "SELECT `password` FROM `users` WHERE `email`=?";
    $row = mysqli_query($connection,$sql);
    $res = mysqli_num_rows($row);
    if($res > 0){
         $data = mysqli_fetch_assoc($row);
         if(password_verify($password, $data['password'])){
             setcookie("Main", md5(sha1(base64_decode(crypt('m3ain',uniqid(mt_rand(), true))))), time() + 1847483);
             setcookie("password", md5(sha1(base64_decode(crypt('pas2word',md5($password))))), time() + 1847483);
             setcookie("at_", md5(sha1(base64_decode(crypt('at23',md5(rand(18171717171,17171717171)))))), time()+ 1847483);
             setcookie("M", md5(sha1(base64_decode(crypt('m21o',md5(rand(18171717171,17171717171)))))), time()+ 1847483);
             setcookie("A", md5(sha1(base64_decode(crypt('eee',md5(rand(18171717171,17171717171)))))), time() + 1847483);
             setcookie("email", $email, time() +1847483);

             header("Location: cookie.php");
         }else{
             echo "Please Try Again";
         }
     }else{
        echo "Try Again Later";
     }
}


?>


<!-- Login Failure CSS -->
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