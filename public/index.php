<?php
//set up auto loader, pull routes array and create instance of entry point class
require '../autoload.php';
$routes = new \Diary\Routes();
$entryPoint = new \RWCSY2028\EntryPoint($routes);
//run entry point class to build pages
$entryPoint->run();
?>