<?php

require_once('../library/pdo/my_pdo.php');

$app->get('/', function() use($app){


    $template_header = $app->view->fetch('../view/template/common/header.html');
    $app->view->setData('header', $template_header);
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

$app->get('/pokerVote', function(){

});

$app->get('/getPokerBySuit/:suitId', function( $suitId ){

    $sql = "SELECT
  cp.*,
  cr.`name`,
  cr.`image`,
  cc.`comic_id`,
  cc.`name` AS comic_name
FROM
  cmc_poker cp
    LEFT JOIN cmc_comic_role cr
        ON cp.`role_id` = cr.`role_id`
  LEFT JOIN cmc_comic cc
    ON cr.`role_id` = cc.`comic_id`
WHERE poker_suit_id = '" . $suitId . "' ;
";

    $res = MyPdo::query($sql);

    echo json_encode( $res );

});

$app->get('/getPokerSuit', function(){


    $sql = "SELECT * FROM cmc_poker_suit";

    $res = MyPdo::query($sql);

    echo json_encode( $res );

});

$app->get('/vote/:pokerId/:suitId', function( $roleId, $suitId ){
    $res = array(
        'status' => 'false',
        'description' => '你已经投过票了'
    );
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql = "SELECT * FROM cmc_poker_vote WHERE ip='" . $ip . "'";


    $vote = MyPdo::query($sql);
    if( empty($vote) ){
        $insertSql = "INSERT INTO cmc_poker_vote SET
role_id = '" . $roleId . "',
suit_id = '" . $suitId . "',
ip = '" . $ip . "',
create_time = NOW()";
        MyPdo::exec($insertSql);
        $res['status'] = 'success';
        $res['description'] = '投票成功';

        //return the poker vote
        $voteCountSql = "SELECT
  COUNT(pv.`poker_vote_id`) AS count
FROM
  cmc_poker_vote pv
WHERE pv.`role_id` = '" . $roleId . "'
        AND pv.`suit_id` = '" . $suitId . "'";
        $voteCount = MyPdo::query( $voteCountSql );
        $res['voteCount'] = $voteCount[0]['count'];
    }

    echo json_encode( $res );

});


