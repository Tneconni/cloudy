<?php

//memcache setting
$mem = null;
if( class_exists('Memcache') ){
    $mem = new Memcache;
    $mem->connect("127.0.0.1", 11211);
}

echo phpinfo();
///redis setting
if( class_exists('Redis') ){
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->set('key', 'hello world');
    echo $redis->get('key');
}else{
    echo 'no Redis class';
}
die();
