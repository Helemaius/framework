<?php



spl_autoload_register(function ($class){
    $class = str_replace('App\\', '', $class);
    require __DIR__ . "/../src/$class.php";
});

require __DIR__ . "/../routes.php";

$router = new App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();

if($match != null && is_callable($match['action'])){
    call_user_func($match['action']);
} elseif($match != null && is_array($match['action'])){
    $class = $match['action'][0]; // App\Controller\HomeController
    $method = $match['action'][1]; // index
    $controller = new $class();
    $controller->$method();
} else {
    echo "404";
}
// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         echo "Home Page";
//         break;
//     case '/about':
//         echo "About us";
//         break;
//     default: 
//         echo "404";
//         break;
// }