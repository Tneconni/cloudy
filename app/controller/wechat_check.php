<?php
$logResource = fopen(BASEDIR . '/log/logs.txt', "a");
$app->environment['slim.errors'] = $logResource;
require_once( BASEDIR . '/../library/wechat/Api.php' );


$app->get('/', function() use( $app ){
    $app->getLog()
        ->getWriter()
        ->write( date('Y-m-d H:i:s') . ' :: the wechat reqeust ' );
    $wxApi = new Api();

    if( isset($_GET["echostr"]) ){
        $app->getLog()->getWriter()->write( '$GET  :: ' . var_export($_GET, true));
        $wxApi->valid();
    }else{
        try{
            $wxApi->responseMsg( $app );
        }catch( \Exception $e ){
            $app->getLog()
                ->getWriter()
                ->write( date('Y-m-d H:i:s') . ' :: ' . $e->getMessage() );
        }

    }


});
$app->post('/', function() use( $app ){
    $app->getLog()
        ->getWriter()
        ->write( date('Y-m-d H:i:s') . ' :: the wechat reqeust ' );
    $wxApi = new Api();

    if( isset($_GET["echostr"]) ){

        $wxApi->valid();
    }else{
        try{
            $wxApi->responseMsg( $app );
        }catch( \Exception $e ){
            $app->getLog()
                ->getWriter()
                ->write( date('Y-m-d H:i:s') . ' :: ' . $e->getMessage() );
        }

    }


});