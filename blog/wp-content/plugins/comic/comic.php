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

class Comic {

    public function __construct(){

    }

    public static function instance(){

        return new Comic();
    }

}

Comic::instance();