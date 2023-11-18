<?php
session_start();
$_SESSION['username'] = "Amr";
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}

session_destroy();
isset($_SESSION['username']);
$_SESSION = array();
echo $_SESSION['username'];
?>