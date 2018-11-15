<?php
//include config
require_once 'config/constants.php';
require_once ABS_PATH . 'classes/mysql_db.php';
global $connection;
$connection = my_sql_connection(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check debug
if(!DEBUG)
    error_reporting(0);

//routing
$controller = DEF_C;
if(!empty($_GET['c']))
    $controller = $_GET['c'];

$action = DEF_A;
if(!empty($_GET['a']))
    $action = $_GET['a'];

//app
require_once ABS_PATH . 'controller/' . $controller . '/' . $action . '.php';



?>