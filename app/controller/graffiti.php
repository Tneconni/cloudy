<?php
require_once( BASEDIR . '/../library/Util.php' );
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
    $app->view->display('view/template/graffiti/index.html');

});

$app->post('/tuya',function(){

    $data = $_POST;

    $sql = "INSERT INTO cmc_tuya SET
`left`='".$data['left'] . "',
`top`='".$data['top'] . "',
`text`='".$data['text'] . "',
create_time=NOW();
";
    $res = MyPdo::query( $sql );

    echo json_encode( $res );

});

$app->get('/list',function( ){

    $sql = "select * from cmc_tuya";
    $res = MyPdo::query( $sql );

    echo json_encode( $res );

});