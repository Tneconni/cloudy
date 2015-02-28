<?php
/**
 * 动漫文章接口
 *
 */

require_once( BASEDIR . '/../library/pdo/my_pdo.php' );
require_once( BASEDIR . '/../library/sys.php' );
sys::session_start();
$app->get('/', function() use($app){
    global $mem, $redis;
    if( is_a($redis, 'Redis')){
        echo $redis->get('redis');
    }
    if(is_a( $mem, 'Memcache' )){
        $template_head = $mem->get('template_head');
        $template_header = $mem->get('template_header');
        $template_footer = $mem->get('template_footer');
    }else{
        $template_head = $app->view->fetch('view/template/common/head.html');
        $template_header = $app->view->fetch('view/template/common/header.html');
        $template_footer = $app->view->fetch('view/template/common/footer.html');
    }

    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $app->view->setData('footer', $template_footer);
    $app->view->display('view/template/essay/index.html');

});

$app->get('/getNews', function() use($app){

    $number = isset($_GET['number']) ? $_GET['number'] : '10';
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $page = $number * ($page - 1);
    $sql = "SELECT * FROM cmc_news order by `public_date` desc limit " . $page . "," . $number;
    $res = MyPdo::query( $sql );
    foreach( $res as &$v){
        $v['public_date']=date('m/d',strtotime($v['public_date']));
        $v['title']=str_replace('#动漫美图#','',$v['title']);
    }
    echo json_encode( $res );

});

$app->get('/getArticle', function() use($app){

    $sql = "SELECT * FROM cmc_article order by `public_time` desc limit 0,10";
    $res = MyPdo::query( $sql );
    foreach( $res as &$v){
        $v['public_time']=date('m/d',$v['public_time']);
        $v['title']=str_replace('#动漫美图#','',$v['title']);
    }
    echo json_encode( $res );

});

$app->get('/comments', function(){

    $number = isset($_GET['number']) ? $_GET['number'] : '10';
    $page = isset($_GET['page']) ? $_GET['page'] : '0';
    $start = $number * $page;
    $comic_id = isset($_GET['comic_id']) ? $_GET['comic_id'] : '0';
    $sql = "SELECT * FROM cmc_comment WHERE comic_id='" . $comic_id .
        "' order by `public_time` desc limit ".$start.",".$number;
    $res = MyPdo::query( $sql );
    foreach( $res as &$v){
        $v['public_time']=date('m/d',strtotime($v['public_time']));
        if( strpos($v['href'],'http://') === false ){
            $v['href'] = 'http://comic.qq.com' . $v['href'];
        }
    }
    echo json_encode( $res );

});

