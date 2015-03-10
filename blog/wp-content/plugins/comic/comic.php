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

        if ( ( 'edit' == $doaction || 'save' == $doaction ) && ! empty( $_GET['aid'] ) ){

            $cNewsEdit = new C_News_Edit();
            if( 'save' == $doaction ){
                $cNewsEdit->save();
            }
            $cNewsEdit->display();

        }else{


            $cNewsList = new C_News_List_Table();
            $cNewsList->prepare_items();
            $cNewsList->display();

        }

    }

    public function comic_tao(){

        $doaction = ! empty( $_REQUEST['action'] ) ? $_REQUEST['action'] : '';
        require_once(sprintf("%s/c-tao/c-tao-admin.php", dirname(__FILE__)));

        if ( ( 'edit' == $doaction || 'save' == $doaction ) && ! empty( $_GET['aid'] ) ){

            $cNewsEdit = new C_Tao_Edit();
            if( 'save' == $doaction ){
                $cNewsEdit->save();
            }
            $cNewsEdit->display();

        }else if( 'create' == $doaction ){
            $cNewsEdit = new C_Tao_Edit();
            $cNewsEdit->display();
        }else{

            $cNewsList = new C_Tao_List_Table();
            $cNewsList->prepare_items();
            $cNewsList->display();

        }

    }

    public function admin_menus() {
        set_current_screen( 'toplevel_page_comic-news' );
        add_options_page('comic setting', 'comic',
            'manage_options', 'comic', array(&$this, 'plugin_settings_page'));
        add_menu_page('Help page', '动漫', 'manage_options', __FILE__, array($this,'my_toplevel_page'));

        $hook = add_submenu_page(
            'comic/comic.php',
            '动漫新闻',
            'comic_news',
            'manage_options', 'comic_news',
            array($this,'comic_news')
        );
        add_submenu_page(
            'comic/comic.php',
            '动漫淘',
            'comic_tao',
            'manage_options', 'comic_tao',
            array($this,'comic_tao')
        );
        add_meta_box( 'submitdiv',
            _x( 'Status', 'activity admin edit screen', 'comic' ),
            array($this,'comic_news_admin_edit_metabox_status'),
            get_current_screen(), 'side', 'core' );
    }

    public function comic_news_admin_edit_metabox_status( $item ) {
        ?>

        <div class="submitbox" id="submitcomic-news">

            <div id="minor-publishing">
                <div id="minor-publishing-actions">
                    <div id="preview-action">
                        <a class="button preview" href="<?php echo esc_attr( get_permalink( $item->news_id, $item ) ); ?>" target="_blank"><?php _e( 'View Activity', 'comic' ); ?></a>
                    </div>

                    <div class="clear"></div>
                </div><!-- #minor-publishing-actions -->

                <div id="misc-publishing-actions">
                    <div class="misc-pub-section" id="comment-status-radio">
                        <label class="approved"><input type="radio" name="activity_status" value="ham" <?php checked( $item->is_spam, 0 ); ?>><?php _e( 'Approved', 'comic' ); ?></label><br />
                        <label class="spam"><input type="radio" name="activity_status" value="spam" <?php checked( $item->is_spam, 1 ); ?>><?php _e( 'Spam', 'comic' ); ?></label>
                    </div>

                    <div class="misc-pub-section curtime misc-pub-section-last">
                        <?php
                        // translators: Publish box date format, see http://php.net/date
                        $datef = __( 'M j, Y @ G:i', 'comic' );
                        $date  = date_i18n( $datef, strtotime( $item->date_recorded ) );
                        ?>
                        <span id="timestamp">
                            <?php printf( __( 'Submitted on: <strong>%1$s</strong>', 'comic' ), $date ); ?></span>&nbsp;
                        <a href="#edit_timestamp" class="edit-timestamp hide-if-no-js" tabindex='4'>
                            <?php _e( 'Edit', 'comic' ); ?></a>

                        <div id='timestampdiv' class='hide-if-js'>
                            <?php touch_time( 1, 0, 5 ); ?>
                        </div><!-- #timestampdiv -->
                    </div>
                </div> <!-- #misc-publishing-actions -->

                <div class="clear"></div>
            </div><!-- #minor-publishing -->

            <div id="major-publishing-actions">
                <div id="publishing-action">
                    <?php submit_button( __( 'Update', 'comic' ), 'primary', 'save', false, array( 'tabindex' => '4' ) ); ?>
                </div>
                <div class="clear"></div>
            </div><!-- #major-publishing-actions -->

        </div><!-- #submitcomment -->

    <?php
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
