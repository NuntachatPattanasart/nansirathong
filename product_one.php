<?php 
session_start();
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrin($_SERVER['PATH_INFO'], '/')) : [];
require_once(ROOT . DS . 'layout' . DS . 'header.php');
require_once(ROOT . DS . 'view' . DS . 'product' . DS . 'product_one.php');
require_once(ROOT . DS . 'layout' . DS . 'footer.php');
?>