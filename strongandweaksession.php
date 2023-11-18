<?php
session_start();

$_SESSION['username'] = md5(rand(1000,3000));
echo $_SESSION['username'];

$_SESSION['username'] = uniqid();
echo $_SESSION['username'];

$_SESSION['username'] = md5(uniqid(mt_rand(),true));
echo $_SESSION['username'];


?>