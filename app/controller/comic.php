<?php
require_once( BASEDIR . '/../library/module/Comic.php' );
$app->get('/single/:comic_id', function( $comic_id ) use($app){

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
    $app->smarty->assign('head', $template_head);
    $app->smarty->assign('header', $template_header);
    $app->smarty->assign('footer', $template_footer);

    $comic = new \Module\Comic();
    $thisComic = $comic->detail( $comic_id );
    $app->smarty->assign( 'comic', $thisComic );

    $rank = $comic->rank();
    $app->view->setData('rank', $rank);
    $template_rank = $app->view->fetch('view/template/gift/rank.html');
    $app->smarty->assign('rank', $template_rank);

    $app->smarty->display('view/template/comic/detail.html');
});