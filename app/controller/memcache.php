<?php

require_once( BASEDIR . '/../library/pdo/my_pdo.php' );
$app->get('/', function() use($app){
    global $mem;
    if(is_a( $mem, 'Memcache' )){
        $mem->flush();
    }
});

