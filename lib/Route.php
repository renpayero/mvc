<?php 

namespace Lib;

class Route{
    private static $routes = [];

    public static function get($uri, $callback){
        $uri = trim($uri, '/');
        self::$routes['GET'][$uri] = $callback;
    }
    public static function post($uri, $callback){
        $uri = trim($uri, '/');
        self::$routes['POST'][$uri] = $callback;
    }

    // esta funcion se encarga de recorrer las rutas y ejecutar la funcion callback que se le pasa
    // si la ruta coincide con la uri que se le pasa por parametro 
    public static function dispatch(){ 
        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri, '/');

        $method = $_SERVER['REQUEST_METHOD'];

        foreach(self::$routes[$method] as $route => $callback){
            if (strpos($route, ':') !== false){
                $route = preg_replace("#:([\W]+)#", "([^/]+)", $route);
            }
            if (preg_match("#^$route$#", $uri)){
                $callback();
                return;
            }
            // if ($route == $uri){
            //     $callback();

            //     return;
            // }
        }
        echo '404 Not Found';
    }
}
