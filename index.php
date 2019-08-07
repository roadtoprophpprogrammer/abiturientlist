<?php

$autoloadFunc=function ($class) {
    $class1=explode('\\', $class);
    $path=$class1[0].'/'.$class1[1].'.php';
    if (file_exists($path)) {
        require_once($path);
    }
};

spl_autoload_register($autoloadFunc);

require_once('routes.php');
