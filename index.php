<?php

require_once 'Controllers/user.php';
require_once 'Controllers/admin.php';


if (isset($_GET["Controllers"])){
    $controller =$_GET["Controllers"];
}
else{
    $controller ='user';
}
$action = $controller;
$act = new $action();
if (isset($_GET["action"])) {
    $a = $_GET["action"];
    }
else{
    $a ="index";
}

$act->$a();
