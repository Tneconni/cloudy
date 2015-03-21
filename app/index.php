<?php
require_once('../Slim/Slim/Slim.php');
require_once('settings.php');

\Slim\Slim::registerAutoloader();

//$baseUrl = $_SERVER['HTTP_HOST'];
define('BASEDIR', __DIR__ );
define('baseUrl', 'http://' . $_SERVER['HTTP_HOST'] . '');
$app = new \Slim\Slim();
$app->view->setTemplatesDirectory( BASEDIR );
$changeUri = $_SERVER['REQUEST_URI'];

if( strpos( $changeUri, '?' ) !== false ){

	$changeUri = explode('?', $_SERVER['REQUEST_URI'])[0];

}
$changeUri = ($changeUri == '/' || $changeUri == '' ) ? '/app/gift': $changeUri;

$changeUriChange = explode('/app', $changeUri)[1];
$changeUriChange = '/app' . $changeUriChange;
$routeChangeArr = explode('/', $changeUriChange);
$controller = $routeChangeArr[2];

$routeArr = explode('/', $changeUri);

if( class_exists('Memcache')){

    if( !empty($mem->get('template_head')) ){
//        $template_head = $mem->get('template_head');
//        echo 'template_head';
    }else{
        $template_head = $app->view->fetch('view/template/common/head.html');
        $mem->set('template_head',$template_head, 0, 0);
    }

    if( !empty($mem->get('template_header')) ){
//        $template_header = $mem->get('template_header');
//        echo 'template_header';
    }else{
        $template_header = $app->view->fetch('view/template/common/header.html');
        $mem->set('template_header',$template_header, 0, 0);
    }

    if( !empty($mem->get('template_footer')) ){
//        $template_footer = $mem->get('template_footer');
//        echo 'template_footer';
    }else{
        $template_footer = $app->view->fetch('view/template/common/footer.html');
        $mem->set('template_footer',$template_footer, 0, 0);
    }

//    $template_head = $app->view->fetch('view/template/common/head.html');
//    $template_header = $app->view->fetch('view/template/common/header.html');
//    $template_footer = $app->view->fetch('view/template/common/footer.html');
//    $mem->set('template_head', $template_head, 0, 60);
//    $mem->set('template_header', $template_header, 0, 60);
//    $mem->set('template_footer', $template_footer, 0, 60);

}

if( count($routeChangeArr) > 2 && !empty($routeChangeArr[2]) ){
    $_SERVER['REQUEST_URI'] = str_replace( '/' . $routeChangeArr[2], '', $changeUri );
    require_once( BASEDIR . '/controller/' . $routeChangeArr[2] . '.php');

}else{

    echo 'the page is null';
}

$app->run();



