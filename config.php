<!-- Config File ///.PHP
Author: @MoraKhaledX -->

<?php
$con = mysqli_connect("localhost","root","mysql") or die("Error: Failed Connecting To Server");
$db = mysqli_select_db($con,"products") or die("Error: Failed Connecting To Database");
?>