<?php
/**
 * 动漫文章接口
 *
 */

require_once( BASEDIR . '/../library/pdo/my_pdo.php' );
$app->get('/', function() use($app){
    $template_head = $app->view->fetch('view/template/common/head.html');
    $template_header = $app->view->fetch('view/template/common/header.html');
    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $app->view->display('view/template/essay/index.html');

});

$app->get('/getArticle', function() use($app){

    $sql = "SELECT * FROM cmc_article order by `public_time` desc limit 0,10";
    $res = MyPdo::query( $sql );
    foreach( $res as &$v){
        $v['public_time']=date('Y-m-d H:i',$v['public_time']);
        $v['title']=str_replace('#动漫美图#','',$v['title']);
    }
    echo json_encode( $res );

});