<?php

include("config.php");

$login_cookie =$_COOKIE['login'];
if(!isset($login_cookie)){

    header("location: login_comentario.php");
}

?>
