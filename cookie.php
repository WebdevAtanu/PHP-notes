<?php
// =========================================set cookie=========================================
setcookie("token","token123",time()+86400,"/"); //cookie is set for token(key), token123(value), 1day, "/" for all routes 
echo("Cookie is set <br>");

// =========================================get cookie=========================================
$cookies=$_COOKIE['token'];
echo("The cookies value- $cookies");
?>