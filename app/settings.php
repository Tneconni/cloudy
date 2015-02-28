<?php


if(1){
    $mem = new Memcache;
    $mem->connect("127.0.0.1", 11211);
    $mem->set('key1', 'This is first value', 0, 60);
    $val = $mem->get('key1');
    echo $val;
}


