<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// echo "opa";
// echo __DIR__;

define('ROOT', __DIR__);

// echo ROOT;

// echo "opa";

$route = include'config/routes.php';

    function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
        return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
// jei yra routuose tada daryti kazka jei ne tada reikia palikti tiesiog index

$uri = getURI();


foreach ($route as $uriPattern => $path) {
    // echo "$uriPattern => $path <br>";
    if(preg_match("~$uriPattern~", $uri)) {
        // echo "$uri";
        $segments = explode('/', $path);

        $controllerName = array_shift($segments).'Controller';
        $controllerName = ucfirst($controllerName);
        echo "<br>$controllerName<br>";
        $actionName = 'action'.ucfirst((array_shift($segments)));
        // echo "$actionName";


        $controllerFile = 'controllers/' .$controllerName. '.php';
        // echo "$controllerFile";
        if (file_exists($controllerFile)) {
            include_once($controllerFile);
        }
        echo "$controllerFile";

        $controllerObject = new $controllerName;
        $result = $controllerObject->$actionName();
        if ($result != null) {
            break;
        }

    }
    
}


$clearDbUrl = parse_url(getenv("CLEARDB_DATABASE_URL"));
$clearDbHost = $clearDbUrl['host'];
echo"<hr>";
echo "$clearDbHost";
print_r($clearDbUrl);