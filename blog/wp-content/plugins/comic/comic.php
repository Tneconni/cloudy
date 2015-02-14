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



    public function plugin_settings_page(){
        if(!current_user_can('manage_options'))
        {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }

        // Render the settings template
        include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
    }

    public function admin_init(){
        register_setting('comic-group', 'setting_a');
        register_setting('comic-group', 'setting_b');
    }

    function my_toplevel_page() {
        echo ' 这里填菜单页面的HTML代码 ';

        // 如以下示例代码。 wrap 类是WordPress构建好的css类，可以在你的HTML代码中使用
        /*
        echo '
        <div class="wrap">
        <h2>使用帮助</h2>
        <p>这里是使用帮助，通过阅读本文你将了解本程序的使用！有事请<a href="#">与我联系</a></p>
        </div>
        ';
        */
    }

    public function c_active() {

        // todo : install sql table

        //var_dump($wp_admin_bar);die();
    }

    public function comic_news(){

        $doaction = ! empty( $_REQUEST['action'] ) ? $_REQUEST['action'] : '';
        require_once(sprintf("%s/c-news/c-news-admin.php", dirname(__FILE__)));
        set_current_screen( 'toplevel_page_comic-news' );
        if ( 'edit' == $doaction && ! empty( $_GET['aid'] ) ){

            $cNewsEdit = new C_News_Edit();
            $cNewsEdit->display();

        }else{

            $cNewsList = new C_News_List_Table();
            $cNewsList->prepare_items();
            $cNewsList->display();

        }

    }

    public function admin_menus() {

        add_options_page('comic setting', 'comic',
            'manage_options', 'comic', array(&$this, 'plugin_settings_page'));
        add_menu_page('Help page', '动漫', 'manage_options', __FILE__, array($this,'my_toplevel_page'));

        add_submenu_page(
            'comic/comic.php',
            'comic_news',
            '动漫新闻',
            'manage_options', 'comic_news',
            array($this,'comic_news')
        );
    }

    public function __construct(){

        require_once(sprintf("%s/c-core/c-core-class.php", dirname(__FILE__)));

        register_activation_hook(__FILE__, array($this, 'c_active'));
        add_action('admin_init', array(&$this, 'admin_init'));
        add_action('admin_menu', array(&$this, 'admin_menus'));

    }

    public static function instance(){

        return new Comic();
    }

}

Comic::instance();
