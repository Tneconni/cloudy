<?php
//echo 'test database';
////test the data base
//$hostname = 'cloud123.mysql.rds.aliyuncs.com';
//$username = 'cloud';
//$password = '111111';
//$database = 'tneconni';
//$link = mysql_connect($hostname, $username, $password);
//mysql_select_db($database, $link);
//mysql_query("SET NAMES 'utf8'", $link);
//mysql_query("SET CHARACTER SET utf8", $link);
//mysql_query("SET CHARACTER_SET_CONNECTION=utf8", $link);
//mysql_query("SET SQL_MODE = ''", $link);
//$sql = "SELECT * FROM cld_apps;";
//$resource = mysql_query($sql, $link);
//var_dump( $resource );die();

require_once('../Slim/Slim/Slim.php');

\Slim\Slim::registerAutoloader();

//$baseUrl = $_SERVER['HTTP_HOST'];
define('BASEDIR', __DIR__ );
define('baseUrl', 'http://' . $_SERVER['HTTP_HOST'] . '' );
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



