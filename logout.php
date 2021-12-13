<?php
session_start();
unset($_SESSION['FRONT_LOGIN']);
unset($_SESSION['FRONT_USERNAME']);
header('location:index.php');
die();
?>