<?php

$app->get('/flush', function() use($app){
    global $mem;
    if(is_a( $mem, 'Memcache' )){
        $mem->flush();
        echo 'the memcache fas flushed';
    }
});

