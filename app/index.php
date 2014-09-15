<?php

require_once('../Slim/Slim/Slim.php');

\Slim\Slim::registerAutoloader();


define('BASEDIR', __DIR__ );
$app = new \Slim\Slim();
$app->view->setTemplatesDirectory( BASEDIR );
$changeUri = $_SERVER['REQUEST_URI'];

if( strpos( $changeUri, '?' ) !== false ){

	$changeUri = explode('?', $_SERVER['REQUEST_URI'])[0];

}

$changeUriChange = explode('/app', $changeUri)[1];
$changeUriChange = '/app' . $changeUriChange;
$routeChangeArr = explode('/', $changeUriChange);
$controller = $routeChangeArr[2];

$routeArr = explode('/', $changeUri);

if( count($routeChangeArr) > 2 && !empty($routeChangeArr[2]) ){
    $_SERVER['REQUEST_URI'] = str_replace( '/' . $routeChangeArr[2], '', $changeUri );
    require_once( BASEDIR . '/controller/' . $routeChangeArr[2] . '.php');

}else{

    echo 'the page is null';
}

$app->run();



