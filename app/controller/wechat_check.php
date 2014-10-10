<?php

require_once( BASEDIR . '/../library/wechat/Api.php' );

$app->get('/', function(){

    $wxApi = new Api();

    if( isset($_GET["echostr"]) ){

        $wxApi->valid();
    }


});