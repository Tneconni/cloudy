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

    public function admin_menus() {

//        $hooks = array();
//
//        // These are later removed in admin_head
//        if ( current_user_can( 'bbp_tools_page' ) ) {
//            if ( current_user_can( 'bbp_tools_repair_page' ) ) {
//                $hooks[] = add_management_page(
//                    __( 'Repair Forums', 'bbpress' ),
//                    __( 'Forum Repair',  'bbpress' ),
//                    $this->minimum_capability,
//                    'bbp-repair',
//                    'bbp_admin_repair'
//                );
//            }
//
//            if ( current_user_can( 'bbp_tools_import_page' ) ) {
//                $hooks[] = add_management_page(
//                    __( 'Import Forums', 'bbpress' ),
//                    __( 'Forum Import',  'bbpress' ),
//                    $this->minimum_capability,
//                    'bbp-converter',
//                    'bbp_converter_settings'
//                );
//            }
//
//            if ( current_user_can( 'bbp_tools_reset_page' ) ) {
//                $hooks[] = add_management_page(
//                    __( 'Reset Forums', 'bbpress' ),
//                    __( 'Forum Reset',  'bbpress' ),
//                    $this->minimum_capability,
//                    'bbp-reset',
//                    'bbp_admin_reset'
//                );
//            }
//
//            // Fudge the highlighted subnav item when on a bbPress admin page
//            foreach ( $hooks as $hook ) {
//                add_action( "admin_head-$hook", 'bbp_tools_modify_menu_highlight' );
//            }
//
//            // Forums Tools Root
//            add_management_page(
//                __( 'Forums', 'bbpress' ),
//                __( 'Forums', 'bbpress' ),
//                $this->minimum_capability,
//                'bbp-repair',
//                'bbp_admin_repair'
//            );
//        }
//
//        // Are settings enabled?
//        if ( ! bbp_settings_integration() && current_user_can( 'bbp_settings_page' ) ) {
//            add_options_page(
//                __( 'Forums',  'bbpress' ),
//                __( 'Forums',  'bbpress' ),
//                $this->minimum_capability,
//                'bbpress',
//                'bbp_admin_settings'
//            );
//        }
//
//        // These are later removed in admin_head
//        if ( current_user_can( 'bbp_about_page' ) ) {
//
//            // About
//            add_dashboard_page(
//                __( 'Welcome to bbPress',  'bbpress' ),
//                __( 'Welcome to bbPress',  'bbpress' ),
//                $this->minimum_capability,
//                'bbp-about',
//                array( $this, 'about_screen' )
//            );
//
//            // Credits
//            add_dashboard_page(
//                __( 'Welcome to bbPress',  'bbpress' ),
//                __( 'Welcome to bbPress',  'bbpress' ),
//                $this->minimum_capability,
//                'bbp-credits',
//                array( $this, 'credits_screen' )
//            );
//        }
//
//        // Bail if plugin is not network activated
//        if ( ! is_plugin_active_for_network( bbpress()->basename ) )
//            return;

//        add_submenu_page(
//            'index.php',
//            __( 'Update Forums', 'bbpress' ),
//            __( 'Update Forums', 'bbpress' ),
//            'manage_network',
//            'bbp-update',
//            array( $this, 'update_screen' )
//        );

        add_options_page('comic setting', 'comic',
            'manage_options', 'comic', array(&$this, 'plugin_settings_page'));

    }

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
    public function __construct(){
        add_action('admin_init', array(&$this, 'admin_init'));
        add_action('admin_menu', array(&$this, 'admin_menus'));

    }

    public static function instance(){

        return new Comic();
    }

}

Comic::instance();

//function plugin_settings_link($links)
//{
//    $settings_link = '<a href="options-general.php?page=comic">Settings123</a>';
//    array_unshift($links, $settings_link);
//    return $links;
//}
//
//$plugin = plugin_basename(__FILE__);
//add_filter("plugin_action_links_$plugin", 'plugin_settings_link');