<?php

//memcache setting
$mem = null;
if( class_exists('Memcache') ){
    $mem = new Memcache;
    $mem->connect("127.0.0.1", 11211);
}

///redis setting
echo phpinfo();