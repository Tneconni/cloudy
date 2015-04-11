<?php

$app->get('/', function() use($app){

    global $mem;
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
    $app->view->display('view/template/gift/index.html');

});

$app->get('/index', function() use($app){

    $number = isset($_GET['number']) ? $_GET['number'] : '12';
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $page = $number * ($page - 1);
    $sql = "SELECT * FROM cmc_tao t left join cmc_tao_attribute ta on t.tao_id=ta.tao_id order by `public_date` desc limit " . $page . "," . $number;
    $res = MyPdo::query( $sql );
    $defaultImg = baseUrl . '/app/view/images/taobao/room.png';
    foreach( $res as &$v){
        $v['public_date']=date('m/d',strtotime($v['public_date']));
        $v['title']=str_replace('#动漫美图#','',$v['title']);
        $v['price'] = $v['price'];
        $v['special'] = $v['special'];
        $v['discount'] = $v['discount'];
        $v['source'] = $v['source'];
        $v['like_count'] = $v['like_count'];
        if(!empty($v['img'])){
            $imgString =  explode('|',trim($v['img'],'|'))[0];
            $imgSplit = explode('_',$imgString);
            $imgTail = '310x310.jpg';
            array_splice($imgSplit, count($imgSplit) - 1, 1, $imgTail);
            $v['img'] = implode('_',$imgSplit);
        }else{
            $v['img'] = $defaultImg;
        }

    }

    echo json_encode( $res );

});

$app->get('/detail/:id',function( $id ) use($app){

    global $mem;
    if(is_a( $mem, 'Memcache' )){
        $template_head = $mem->get('template_head');
        $template_header = $mem->get('template_header');
        $template_footer = $mem->get('template_footer');
    }else{
        $template_head = $app->view->fetch('view/template/common/head.html');
        $template_header = $app->view->fetch('view/template/common/header.html');
        $template_footer = $app->view->fetch('view/template/common/footer.html');
    }

    $app->view->setData('tao_id', $id);
    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $app->view->setData('footer', $template_footer);
    $app->view->display('view/template/gift/detail.html');

});

$app->get('/single/:id', function( $id ){

    $sql = "SELECT
  *
FROM
  cmc_tao t
  LEFT JOIN cmc_tao_attribute ta
    ON t.`tao_id` = ta.`tao_id`
WHERE t.tao_id = '$id'";
    $res = MyPdo::query( $sql );
    $tao = $res[0];
    $tao['imgGroup'] = array();
    if(!empty($tao['img'])){

        $imgArr  =  explode('|',trim($tao['img'],'|'));
        foreach( $imgArr as $img ){

            $imgSplit = explode('_',$img);
            $imgTail = '310x310.jpg';
            array_splice($imgSplit, count($imgSplit) - 1, 1, $imgTail);

            $tao['imgGroup'][] = array(
                'small'=> $img,
                'big'  => implode('_',$imgSplit)
            );
        }
        $tao['shop'] = $tao['source'] == 'tmall' ? '天猫' : '淘宝';
        $tao['final_price'] = empty($tao['special']) ? $tao['price'] : $tao['special'];

    }else{
        $defaultImg = baseUrl . '/app/view/images/taobao/room.png';
        $tao['imgGroup'][] = array(
            'small'=> $defaultImg,
            'big'  => $defaultImg
        );;
    }


    echo json_encode( $tao );

});

$app->get('/squad/:id', function( $id ) use($app){

    global $mem;
    if(is_a( $mem, 'Memcache' )){
        $template_head = $mem->get('template_head');
        $template_header = $mem->get('template_header');
        $template_footer = $mem->get('template_footer');
    }else{
        $template_head = $app->view->fetch('view/template/common/head.html');
        $template_header = $app->view->fetch('view/template/common/header.html');
        $template_footer = $app->view->fetch('view/template/common/footer.html');
    }

    $app->view->setData('squad_id', $id);
    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $app->view->setData('footer', $template_footer);
    $app->view->display('view/template/gift/squad.html');

});
$app->get('/squad/single/:id', function( $squad_id ){


    $squadSql = "SELECT * FROM cmc_squad WHERE squad_id='$squad_id'";
    $squad = MyPdo::query( $squadSql );

    $taoSql = "SELECT
  t.*
FROM
 cmc_tao_to_squad t2s
  LEFT JOIN cmc_tao t
    ON t2s.`tao_id` = t.`tao_id`
WHERE t2s.`squad_id` = '$squad_id'";
    $taos = MyPdo::query( $taoSql );

    $taoArr = array();
    foreach( $taos as $tao ){
        $imgArr  =  explode('|',trim($tao['img'],'|'));
        $tao['imgGroup'] = array();
        foreach( $imgArr as $img ){

            $imgSplit = explode('_',$img);
            $imgTail = '310x310.jpg';
            array_splice($imgSplit, count($imgSplit) - 1, 1, $imgTail);

            if( count($tao['imgGroup']) < 4 ){
                $tao['imgGroup'][] = array(
                    'small'=> $img,
                    'big'  => implode('_',$imgSplit)
                );
            }

        }
        $taoArr[] = $tao;
    }

    $json = array(
        'squad' => $squad,
        'taos'  => $taoArr
    );
    echo json_encode( $json );

});
