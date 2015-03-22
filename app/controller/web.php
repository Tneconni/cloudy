<?php

$app->get('/', function() use($app){
    $template_head = $app->view->fetch('view/template/common/head.html');
    $template_header = $app->view->fetch('view/template/common/header.html');

    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $template_footer = $app->view->fetch('view/template/common/footer.html');
    $app->view->setData('footer', $template_footer);
    $app->view->display('view/template/web/index.html');

});

$app->get('/getWebsite', function( ) use($app){

    $sql = "SELECT * FROM cmc_website";
    $res = MyPdo::query( $sql );
    foreach( $res as &$v){

    }
    echo json_encode( $res );

});