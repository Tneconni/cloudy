<?php


$app->get('/connect', function() use($app){
    $template_head = $app->view->fetch('view/template/common/head.html');
    $template_header = $app->view->fetch('view/template/common/header.html');

    $app->view->setData('head', $template_head);
    $app->view->setData('header', $template_header);
    $template_footer = $app->view->fetch('view/template/common/footer.html');
    $app->view->setData('footer', $template_footer);
    $app->view->display('view/template/qq/connect.html');

});