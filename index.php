<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)) . DS);
    define('URL',"http://localhost");
    require "Config/Autoload.php";
    Config\Autoload::run();
    require_once "View/template.php";
    Config\Router::run(new Config\Request());
    
    //require_once 'mysqli.php';
    //phpinfo();
    /*
    $conConfig = array(
        "host" => "localhost",
        "user" => "root",
        "pass" => "Admin",
        "db" => "uplay"
    );
    $con = new mysqli($conConfig['host'],
    $conConfig['user'], $conConfig['pass'],
    $conConfig['db']);
    echo $con->connect_error;
    $host = 'localhost';
    $dbname = 'uplay';
    $username = 'root';
    $password = 'Admin';
    
    try {
        $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }      
    */
 ?>