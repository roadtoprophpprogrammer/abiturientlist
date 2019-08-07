<?php
namespace classes;

class Route
{
    private static $routes=array();
    public static function set($route, $func)
    {
        self::$routes[]=$route;
        if ($_GET['url']==$route) {
            $func->__invoke();
        } elseif (empty($_GET['url'])) {
            require_once('views/error.php');
        } else {
            \controllers\Home::createView();
        }
    }
}
