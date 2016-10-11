<?php
session_start();

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
else if(isset($_SESSION['user'])!="")
{
 header("Location: welcome.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['user']);
 unset($_SESSION['user_login_status']);
 header("Location: login.php");
}
?>