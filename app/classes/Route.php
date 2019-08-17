<?php
namespace classes;

class Route
{
    public static function set($route, $func)
    {
        if ($_GET['url']==$route) {
            $func->__invoke();
        }
    }
}
