<?php
setcookie("Amr", md5(mt_rand(1000,3000)), time()+500);
setcookie("Amr", "", time()-500);

setcookie("Amr", md5(uniqid(mt_rand(),true)), time()+500);
setcookie("Amr", "", time()-500);
?>