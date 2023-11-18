<?php

setcookie("Amr", "My Name Is Amr", time() + 25);
echo $_COOKIE['Amr'];
setcookie("Amr", "", time() - 25);

if(isset($_COOKIE['Main']) and isset($_COOKIE['password']) and isset($_COOKIE['at_']) and isset($_COOKIE['M']) and isset($_COOKIE['A']) and isset($_COOKIE['email']))
{
    echo "welcome".$_COOKIE['email']."to your panel";

}else
{
    header("Location: login.php");
}


?>