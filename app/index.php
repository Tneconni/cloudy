<?php

require_once('../Slim/Slim/Slim.php');

\Slim\Slim::registerAutoloader();


define('BASEDIR', __DIR__ );
$app = new \Slim\Slim();
$app->view->setTemplatesDirectory( BASEDIR );
$changeUri = $_SERVER['REQUEST_URI']; print_r( $changeUri );

if( strpos( $changeUri, '?' ) !== false ){

	$changeUri = explode('?', $_SERVER['REQUEST_URI'])[0];

}
$changeUri = explode('/app', $changeUri)[1];
$changeUri = '/app' . $changeUri;
$routeArr = explode('/', $changeUri);


if( count($routeArr) > 2 && !empty($routeArr[2]) ){
    $_SERVER['REQUEST_URI'] = str_replace( '/' . $routeArr[2], '', $changeUri );
    require_once( '/controller/' . $routeArr[2] . '.php');

}else{

    echo 'the page is null';
}

$app->run();



