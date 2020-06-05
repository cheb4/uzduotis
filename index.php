<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);




define('ROOT', __DIR__);

// nueina i galimus adresus ir nuskaito juos
$route = include 'config/routes.php';

function getURI()
{
    if (!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
// gauna narsykles url adresa

$uri = getURI();

// bando surasti ir nustatyti ka nori vartotojas
// 
foreach ($route as $uriPattern => $path) {
    if (preg_match("~$uriPattern~", $uri)) {

        $segments = explode('/', $path);

        $controllerName = array_shift($segments) . 'Controller';
        $controllerName = ucfirst($controllerName);

        // echo "<br>$controllerName<br>";
        $actionName = 'action' . ucfirst((array_shift($segments)));
        // echo "$actionName";


        $controllerFile = 'controllers/' . $controllerName . '.php';
        // echo "$controllerFile";
        if (file_exists($controllerFile)) {
            include_once($controllerFile);
        }
        // echo "$controllerFile";

        $controllerObject = new $controllerName;
        $result = $controllerObject->$actionName();
        if ($result != null) {
            break;
        }
    }
}
