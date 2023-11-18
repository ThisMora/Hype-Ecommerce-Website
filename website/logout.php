<!-- Logout File ///.PHP
Author: @MoraKhaledX -->

<?php
    session_start();
    unset($_SESSION["loggedUser"]);
    header('Location: login.php');
?>