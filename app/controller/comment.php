<?php

require_once( BASEDIR . '/../library/pdo/my_pdo.php' );
$app->get('/', function() use($app){
    $template_head = $app->view->fetch('view/template/common/head.html');
    $template_header = $app->view->fetch('view/template/common/header.html');

    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $app->view->display('view/template/comment/index.html');

});


$app->get('/list',function(){

    $number = isset($_GET['number']) ? $_GET['number'] : '10';
    $page = isset($_GET['page']) ? $_GET['page'] : '0';
    $start = $number * $page;
    $comic_id = isset($_GET['comic_id']) ? $_GET['comic_id'] : '0';
    $sql = "SELECT
  cc.id,
  cc.comic_id,
  cc.title,
  cc.href,
  cc.public_time,
  cc.date_add,
  ccd.image as cmc_img
FROM
  cmc_comment cc
  LEFT JOIN cmc_comic_description ccd
    ON cc.`comic_id` = ccd.`comic_id` WHERE cc.comic_id='" . $comic_id .
    "' order by cc.`public_time` desc limit ".$start.",".$number;
    $res = MyPdo::query( $sql );
    foreach( $res as &$v){
        $v['public_time']=date('Y-m-d',strtotime($v['public_time']));
        if( strpos($v['href'],'http://') === false ){
            $v['href'] = 'http://comic.qq.com' . $v['href'];
        }
        if( empty($v['img']) || $v['img'] == 'null' ){
            $v['img'] = '/app/view/images/' . $v['cmc_img'];
        }
    }
    echo json_encode( $res );
});

