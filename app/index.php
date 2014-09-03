<?php

require_once('../Slim/Slim/Slim.php');

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$routeArr = explode('/', $_SERVER['REQUEST_URI']);


if( count($routeArr) > 2 && !empty($routeArr[2]) ){

    $_SERVER['REQUEST_URI'] = '/app/';
    require_once( '/controller/' . $routeArr[2] . '.php');

}else{

    echo 'the page is null';
}


$app->run();



