<?php

require_once( BASEDIR . '/../library/pdo/my_pdo.php' );
$app->get('/', function() use($app){
    $template_head = $app->view->fetch('view/template/common/head.html');
    $template_header = $app->view->fetch('view/template/common/header.html');

    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $template_footer = $app->view->fetch('view/template/common/footer.html');
    $app->view->setData('footer', $template_footer);
    $app->view->display('view/template/gift/index.html');

});

$app->get('/index', function() use($app){

    $number = isset($_GET['number']) ? $_GET['number'] : '12';
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $page = $number * ($page - 1);
    $sql = "SELECT * FROM cmc_tao order by `public_date` desc limit " . $page . "," . $number;
    $res = MyPdo::query( $sql );
    $defaultImg = baseUrl . '/app/view/images/taobao/room.png';
    foreach( $res as &$v){
        $v['public_date']=date('m/d',strtotime($v['public_date']));
        $v['title']=str_replace('#动漫美图#','',$v['title']);
        if(!empty($v['img'])){
            $imgString =  explode('|',trim($v['img'],'|'))[0];
            $imgSplit = explode('_',$imgString);
            $imgTail = '310x310.jpg';
            array_splice($imgSplit, count($imgSplit) - 1, 1, $imgTail);
            $v['img'] = implode( '_', $imgSplit );
        }else{
            $v['img'] = $defaultImg;
        }
    }

    echo json_encode( $res );

});


