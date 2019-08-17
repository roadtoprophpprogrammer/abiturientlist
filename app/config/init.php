<?php
mb_internal_encoding('utf-8');

spl_autoload_register(function ($class) {
    $class1=explode('\\', $class);
    $path='app/'.$class1[0].'/'.$class1[1].'.php';
    if (file_exists($path)) {
        require_once($path);
    }
});

require_once('routes.php');
