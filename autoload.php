<?php
//autoload function enables classes to be loaded without having to require every class file
function autoload($classname) {
    $fileName = str_replace('\\', '/', $classname) . '.php';
    $file = '../'.$fileName;
    
    require $file;
}
spl_autoload_register('autoload');