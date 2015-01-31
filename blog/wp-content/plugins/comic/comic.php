<?php
/**
 * @package comic
 * @version 0.1
 */
/*
Plugin Name: comic module
Plugin URI:
Description: manage my comic module.
Author: cloud
Version: 0.1
Author URI: http://www.mankaa.com/
*/

function getComic(){

    echo 'this is the comic module';
}

add_action('admin_head', 'getComic');