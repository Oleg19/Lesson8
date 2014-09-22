<?php

function __autoload($class)
{
    $parts = explode('\\', $class);
    $parts[0] = 'classes';
    $parts[1] = strtolower($parts[1]);
    require implode("/", $parts) . '.php';
    require __DIR__ . '/vendor/autoload.php';
}


$ctrl = $_GET['ctrl'];
$action = $_GET['action'];
$ctrlClass = 'Classes\\Controllers\\' . ucfirst($ctrl) . 'Controller';

$ctrl =new $ctrlClass;
$ctrl->action($action);