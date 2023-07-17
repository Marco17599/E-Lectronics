<?php
require_once 'smartyConfig.php';
require_once "config/autoload.php";


$FrontController = CfrontController::getInstance($_SERVER['REQUEST_URI']);
$FrontController->run();


?>
