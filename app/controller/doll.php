<?php

require_once( BASEDIR . '/../library/pdo/my_pdo.php' );
$app->get('/', function() use($app){
    $template_head = $app->view->fetch('view/template/common/head.html');
    $template_header = $app->view->fetch('view/template/common/header.html');

    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $app->view->display('view/template/doll/index.html');

});

$app->get('/article', function() use($app){

    $sql = "SELECT * FROM cmc_article WHERE `category_id`= '5' order by `public_time` desc limit 0,10";
    $res = MyPdo::query( $sql );
    foreach( $res as &$v){

        $v['description'] = trim($v['description']);

    }
    echo json_encode( $res );

});


