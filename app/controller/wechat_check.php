<?php
$logResource = fopen(BASEDIR . '\log\logs.txt', "a");
$app->environment['slim.errors'] = $logResource;
require_once( BASEDIR . '/../library/wechat/Api.php' );


$app->get('/', function() use( $app ){

    $wxApi = new Api();

    if( isset($_GET["echostr"]) ){

        $wxApi->valid();
    }else{
        try{
            $wxApi->responseMsg();
        }catch( \Exception $e ){
            $app->getLog()
                ->getWriter()
                ->write( date('Y-m-d H:i:s') . ' :: ' . $e->getMessage() );
        }

    }


});