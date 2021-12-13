<?php
session_start();
$con=mysqli_connect("localhost","root","","furniture_shop");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/furniture_shop/');
define('SITE_PATH','http://localhost/furniture_shop/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'Product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'Product/');
?>