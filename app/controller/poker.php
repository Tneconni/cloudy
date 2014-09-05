<?php

$app->get('/', function() use($app){

	echo 'this is the poker function.';

    $app->view->setData('p','sd');
    $app->view->display('../view/template/tmp.tpl');
});
