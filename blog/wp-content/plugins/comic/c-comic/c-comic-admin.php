<?php

class C_Comic_List_Table extends WP_List_Table{

    public $table_name = 'c_comic';
    public function __construct(){

        parent::__construct( array(
            'ajax'     => false,
            'plural'   => 'comic',
            'singular' => 'comic',
            'screen'   => get_current_screen(),
        ) );

    }

    public function extra_tablenav( $witch ){

        $createUrl = get_admin_url(null, 'admin.php?page=comic&action=create');

        ?>
        <div><a href="<?php echo $createUrl;?>">添加新的comic页面：</a></div>
        <?php if( $witch == 'bottom'): ?>
        <script>
            $('.comic-item').click(function(){
                var url = 'admin-ajax.php';
                var data = {
                    action   : 'select_comic'
                };

                $.post(url, data, function(d){
                    console.log(d);
                });
            });
        </script>
    <?php
        endif;
    }

    public function prepare_items(){

        $this->_column_headers = array(
            $this->get_columns(),
            array(),
            $this->get_sortable_columns()
        );
        $page = $this->get_pagenum();
        $per_page = 20;
        $dataList = C_Core_Class::get( array(
//            'display_comments' => 'stream',
//            'filter'           => $filter,
//            'in'               => $include_id,
            'page'             => $page,
            'per_page'         => $per_page,
//            'search_terms'     => $search_terms,
//            'show_hidden'      => true,
            //'sort'             => $sort,
//            'spam'             => $spam,
//            'count_total'      => 'count_query',
            'table_name'        => 'cmc_comic',
            'pk'                => 'comic_id'
        ) );

        $this->items = $dataList['items'];
        $total = $dataList['total'];

        $this->set_pagination_args( array(
            'per_page'    => $per_page,
            'total_items' => $total,
            'total_pages' => ceil( $total / $per_page )
        ) );

    }

    function get_columns() {
        return array(
            'cb'       => '<input name type="checkbox" />',
            'comic_id'   => _x('Comic_id', 'Admin SWA column header', 'comic' ),
            'name'  => _x( 'Name', 'Admin SWA column header', 'comic' ),
            'ename'   => _x( 'Ename', 'Admin SWA column header', 'comic' ),
            'status' => _x( 'Status', 'Admin SWA column header', 'comic' ),
        );
    }

    public function column_default( $item, $column_name ){
        return $item->{$column_name};
    }

    public function column_cb( $item ){
        return "<input id='comic-{$item->comic_id}' type='checkbox' />";
    }

    public function column_name( $item ){

        echo $item->name;

    }

    public function column_ename($item){
        echo $item->ename;
    }

    public function column_status($item){
        echo $item->status;
    }
}


class C_Comic_Edit {


    public function display(){


        $tao = C_Core_Class::get( array(
//            'display_comments' => 'stream',
//            'filter'           => $filter,
            'in'               => ! empty( $_REQUEST['aid'] ) ? (int) $_REQUEST['aid'] : 0,
            'table_name'        => 'cmc_comic',
            'pk'        => 'comic_id'
        ) );
        $activity = $tao['items'][0];
        // Construct URL for form
        $form_url = remove_query_arg( array( 'action', 'deleted', 'error', 'spammed', 'unspammed', ), $_SERVER['REQUEST_URI'] );
        $form_url = add_query_arg( 'action', 'save', $form_url );
        ?>
        <div class="wrap">
            <?php screen_icon( 'comic-tao' ); ?>
            <?php if(!empty($activity)) :?>
                <h2><?php printf( __( 'Editing Activity (ID #%s)', 'comic' ), number_format_i18n( (int) $_REQUEST['aid'] ) ); ?></h2>
            <?php else: ?>
                <h2>添加新的动漫</h2>
            <?php endif; ?>

            <form action="<?php echo esc_attr( $form_url ); ?>" id="comic-tao-edit-form" method="post">
                <div id="poststuff">

                    <div id="post-body" class="metabox-holder columns-<?php echo 1 == get_current_screen()->get_columns() ? '1' : '2'; ?>">
                        <div id="post-body-content">
                            <div id="postdiv">
                                <div id="bp_activity_action" class="postbox">
                                    <h3><?php _e( 'Title', 'comic' ); ?></h3>
                                    <div class="inside">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->title : ''), 'title',
                                            array( 'media_buttons' => false, 'textarea_rows' => 7,
                                                'teeny' => true, 'quicktags' =>
                                                array( 'buttons' => 'strong,em,link,block,del,ins,img,code,spell,close' ) ) ); ?>
                                    </div>
                                </div>

                                <div id="comic_tao_content" class="postbox">
                                    <h3><?php _e( 'Url', 'comic' ); ?></h3>
                                    <div class="inside">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->url:'' ), 'url',
                                            array( 'media_buttons' => false, 'teeny' => true,
                                                'quicktags' =>
                                                    array( 'buttons' => 'strong,em,link,block,del,ins,img,code,spell,close' ) ) ); ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- #post-body-content -->

                        <div id="postbox-container-1" class="postbox-container">
                            <?php do_meta_boxes( get_current_screen()->id, 'side', $activity ); ?>
                        </div>

                        <div id="postbox-container-2" class="postbox-container">
                            <?php do_meta_boxes( get_current_screen()->id, 'normal', $activity ); ?>
                            <?php do_meta_boxes( get_current_screen()->id, 'advanced', $activity ); ?>
                        </div>
                    </div><!-- #post-body -->

                </div><!-- #poststuff -->
                <?php wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false ); ?>
                <?php wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false ); ?>
                <?php wp_nonce_field( 'edit-comic-tao_' . ! empty( $activity )?$activity->tao_id:0 ); ?>
            </form>

        </div><!-- .wrap -->
<?php
    }

    public function save() {
        global $wpdb;

        if( isset($_POST['title']) ){
            $this->title = $_POST['title'];
        }
        if( isset($_POST['url']) ){
            $this->url = $_POST['url'];
        }

        $this->title        = apply_filters_ref_array(
            'comic_tao_title_before_save',
            array(
                $this->title,
                &$this
            )
        );
        $this->url           = apply_filters_ref_array(
            'comic_tao_url_before_save',
            array(
                $this->url,
                &$this
            ) );

        do_action_ref_array( 'comic_tao_before_save', array( &$this ) );

        if ( empty( $this->title ) || empty( $this->url ) ) {
            return false;
        }
        $this->tao_id = ( isset($_GET['aid']) && !empty( $_GET['aid']) ) ? $_GET['aid'] : 0;
        // If we have an existing ID, update the activity item, otherwise insert it.
        if ( ! empty( $this->tao_id ) ) {
            $sql = "UPDATE cmc_tao SET
title='%s',
url = '%s' WHERE tao_id = '%s'";
            $q = $wpdb->prepare( $sql, $this->title, $this->url, $this->tao_id );
        } else {
            $sql = "INSERT INTO cmc_tao SET title = '%s',
url = '%s', public_date=now(), date_add=now() ";
            $q = $wpdb->prepare( $sql , $this->title,$this->url );
        }

        if ( false === $wpdb->query( $q ) ) {
            return false;
        }

        // If this is a new activity item, set the $id property
        if ( empty( $this->tao_id ) ) {
            $this->tao_id = $wpdb->insert_id;

            // If an existing activity item, prevent any changes to the content generating new @mention notifications.
        } else {
            add_filter( 'comic_tao_at_name_do_notifications', '__return_false' );
        }

        /**
         * Fires after an activity item has been saved to the database.
         *
         * @since BuddyPress (1.0.0)
         *
         * @param BP_Activity_Activity Reference to current instance of activity being saved.
         */
        do_action_ref_array( 'comic_tao_after_save', array( &$this ) );

        return true;
    }

}