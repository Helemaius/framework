<?php
namespace App;

class Router {
    private $uri;
    private $method;
    public static $routes = [];

    public function __construct($uri, $method){
        $this->uri = $uri;
        $this->method = $method;
    }

    public static function addRoute($uri, $method, $action){
        self::$routes[] = [
            'uri' => $uri,
            'method' => strtoupper($method),
            'action' => $action
        ];
        
    }

    public static function get($uri, $action){
        self::addRoute($uri, 'GET', $action);
    }
    public static function post($uri, $action){
        self::addRoute($uri, 'POST', $action);
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route['uri'] == $this->uri && $route['method'] == $this->method){
                return $route;
            }
        }
    }
}