<?php

require_once('../library/pdo/my_pdo.php');

$app->get('/', function() use($app){

    $app->view->display('../view/template/poker/index.html');


});

$app->get('/getComic', function() use($app){

    $sql = "SELECT * FROM cmc_comic";
    $res = MyPdo::query($sql);

    echo json_encode( $res );

});

$app->get('/getComicRole', function() use($app){

    $comicId = $_GET['comic_id'];
    $sql = "SELECT * FROM cmc_comic_role where comic_id='" . $comicId . "'";
    $res = MyPdo::query($sql);

    echo json_encode( $res );

});


