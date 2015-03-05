<?php

//memcache setting
$mem = null;
if( class_exists('Memcache') ){
    $mem = new Memcache;
    $mem->connect("127.0.0.1", 11211);
}

///redis setting
if( class_exists('Redis') ){
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->set('redis', 'redis is running in this server');
}

