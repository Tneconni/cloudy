<?php

require_once('../library/pdo/my_pdo.php');

$app->get('/', function() use($app){


    $template_header = $app->view->fetch('view/template/common/header.html');
    $app->view->setData('header', $template_header);
    $app->view->display('view/template/poker/index.html');


});

$app->get('/getComicType', function() use($app){

    $sql = "SELECT * FROM cmc_comic_type";
    $res = MyPdo::query( $sql );

    echo json_encode( $res );

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
  cr.`role_id`,
  cr.`comic_id`,
    cr.`name`,
    cr.`image`,
    c.`name` AS comic_name,
  COUNT(pv.`role_id`) AS vote_count
FROM
  cmc_comic_role cr
  LEFT JOIN cmc_poker_vote pv
    ON cr.`role_id` = pv.`role_id`
    LEFT JOIN cmc_comic c
    ON cr.`comic_id`=c.`comic_id`
    WHERE pv.`suit_id`='" . $suitId . "'
    GROUP BY cr.`role_id`
    ORDER BY vote_count DESC";

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


