<?php
require_once( BASEDIR . '/../library/Util.php' );
require_once( BASEDIR . '/../library/module/Gift.php' );
require_once( BASEDIR . '/../library/module/Comic.php' );
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
            $v['img'] = Util::refactorImg( $v['img'] );

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

            $newImg = Util::refactorImg( $img );
            $tao['imgGroup'][] = array(
                'small'=> $img,
                'big'  => $newImg
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
        $template_head = $app->smarty->fetch('view/template/common/head.html');
        $template_header = $app->smarty->fetch('view/template/common/header.html');
        $template_footer = $app->smarty->fetch('view/template/common/footer.html');
    }

    $gift = new \Module\Gift();
    $gift = $gift->single( $id );
    $app->smarty->assign( 'squad', $gift['squad'] );
    $app->smarty->assign( 'taos', $gift['taos'] );


    $comic = new \Module\Comic();
    $rank = $comic->rank();
    $app->view->setData('rank', $rank);
    $template_rank = $app->view->fetch('view/template/gift/rank.html');
    $app->smarty->assign('template_rank', $template_rank);

    $app->smarty->assign( 'squad_id', $id );
    $app->smarty->assign('head', $template_head);
    $app->smarty->assign('header', $template_header);
    $app->smarty->assign('footer', $template_footer);

    $app->smarty->display('view/template/gift/squad.html');

});
$app->get('/squad/single/:id', function( $squad_id ){


    $squadSql = "SELECT * FROM cmc_squad WHERE squad_id='$squad_id' LIMIT 0,1";
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


            if( count($tao['imgGroup']) < 4 ){
                $newImg = Util::refactorImg( $img );
                $tao['imgGroup'][] = array(
                    'small'=> $img,
                    'big'  => $newImg

                );
            }

        }
        $taoArr[] = $tao;
    }

    $json = array(
        'squad' => $squad[0],
        'taos'  => $taoArr
    );
    echo json_encode( $json );

});


$app->get('/squad-list',function() use($app){

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



//    $app->view->setData('head', $template_head);
//    $app->view->setData('header', $template_header);
//    $app->view->setData('footer', $template_footer);
//    $app->view->display('view/template/gift/squad-list.html');
    $gift = new \Module\Gift();
    $squad_banner = $gift->banner( ); //print_r( $squad_banner ); die();
    $app->view->setData('squad_banner', $squad_banner);
    $app->smarty->assign('squad_banner', $squad_banner);
    $template_banner = $app->view->fetch('view/template/gift/banner.html');
    $app->smarty->assign('banner', $template_banner);

    $comic = new \Module\Comic();
    $rank = $comic->rank(5);
    $app->view->setData('rank', $rank);
    $app->smarty->assign('rank', $rank);

    $template_person_banner = $app->view->fetch('view/template/gift/person_banner.html');
    $app->smarty->assign('person_banner', $template_person_banner);

    $template_rank = $app->view->fetch('view/template/gift/rank.html');
    $app->smarty->assign('rank', $template_rank);

    $app->smarty->assign('head', $template_head);
    $app->smarty->assign('header', $template_header);
    $app->smarty->assign('footer', $template_footer);



    $list = $gift->getList();
    $app->smarty->assign('list', $list);
    $app->smarty->display('view/template/gift/squad-list.html');

});

$app->get('/customer/comment/list',function() use($app){

    $type = $_GET['type'];
    $type_value = $_GET['type_value'];

    $res = array(
        'status' => 0
    );
    $sql = "SELECT * FROM cmc_customer_comment WHERE type='". $type
        ."' AND type_value='" . $type_value . "' order by date_add desc LIMIT 0,10";
    $comment = MyPdo::query( $sql );
    $res['status'] = 1;
    $res['comment'] = $comment;
    echo json_encode( $res );
});

$app->post('/customer/comment/edit', function(){

    $post = json_decode(file_get_contents('php://input'),true);
    $type = $post['type'];
    $type_value = $post['type_value'];
    $content = $post['content'];

    $res = array(
        'status' => 0
    );
    $sql = "INSERT INTO cmc_customer_comment SET
`content`='".$content."',
`customer_name`='漫客',
`customer_id`='0',
`to_comment_id`='0',
`type`='".$type."',
`type_value`='".$type_value."',
`date_add`=NOW();";
    $comment = MyPdo::query( $sql );
    $res['status'] = 1;
    echo json_encode( $res );
});

$app->get('/squad-list/json',function() use($app){

    $sql = 'SELECT * FROM cmc_squad order by date_add desc LIMIT 0,10';


    $squads = MyPdo::query( $sql );
    foreach($squads as &$squad){
        $taoSql = "SELECT
  t.*
FROM
  cmc_tao_to_squad t2s
  INNER JOIN cmc_tao t
    ON t2s.`tao_id` = t.`tao_id`
	WHERE t2s.`squad_id`='" . $squad['squad_id'] . "' LIMIT 0,1 ";

        $tao = MyPdo::query($taoSql);
        $squad['imgs'] = array();
        if( $squad['img'] ){
            $squad['imgs'][] = array(
                'small'  => '/blog/wp-content/uploads/' . $squad['img'],
                'big'    => '/blog/wp-content/uploads/' . $squad['img']
            );
        }

        if( !empty( $tao ) ){
            $imgArr  =  explode('|',trim($tao[0]['img'],'|'));
            foreach( $imgArr as $img ){

                $newImg = Util::refactorImg( $img );
                $squad['imgs'][] = array(
                    'small'  => $img,
                    'big'    => $newImg
                );
            }
        }

        $squad['description'] = mb_strlen($squad['description'],'utf-8') > 160 ?
            mb_substr($squad['description'],0,160,'utf-8') . '...' : $squad['description'];
    }
    echo json_encode( $squads );
});