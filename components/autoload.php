<?php


spl_autoload_register(function ($class){
    $paths = array(
        '/components/',
        '/controllers/',
        '/models/',
    );
    foreach ($paths as $path){
        $file = ROOT . $path . $class . '.php';
        if(file_exists($file)){
            include $file;
        }
    }
});




/*function __autoload($class_name)
{
    $array_path = array(
        '/models/',
        '/components/',
        '/controlers/',
    );
    foreach ($array_path as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}*/