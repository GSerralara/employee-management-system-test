<?php
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)) . DS);
    define('URL',"http://localhost");
    require "Config/Autoload.php";
    Config\Autoload::run();
    require_once "View/template.php";
    Config\Router::run(new Config\Request());
 ?>