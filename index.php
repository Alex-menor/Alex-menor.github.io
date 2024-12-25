<?php
session_start();
require_once "libs/routes.php";
require_once "libs/template.php";
require_once "libs/connection.php";
if (isset($_GET["controller"]) && isset($_GET["action"])) {
    $controller = $_GET["controller"];
    $action = $_GET["action"];
}else{
    $controller="home";
    $action="login";
}
connection::getConnetion();
Routes::loadcontent($controller, $action);

