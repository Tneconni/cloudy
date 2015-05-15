<?php

class C_Squad_List_Table extends WP_List_Table{

    public $table_name = 'cmc_squad';
    public function __construct(){

        parent::__construct( array(
            'ajax'     => false,
            'plural'   => 'comic_squad',
            'singular' => 'comic_squad',
            'screen'   => get_current_screen(),
        ) );

    }

    public function extra_tablenav(){

        $createUrl = get_admin_url(null, 'admin.php?page=comic_squad&action=create');
        ?>
        <div><a href="<?php echo $createUrl;?>">添加新的Squad页面：</a></div>
    <?php

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
            'table_name'        => 'cmc_squad',
            'pk'                => 'squad_id'
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
            'title'   => _x('Title', 'Admin SWA column header', 'comic' ),
            'url'  => _x( 'Url', 'Admin SWA column header', 'comic' ),
            'img'   => _x( 'Img', 'Admin SWA column header', 'comic' ),
            'website_id' => _x( 'Website Id', 'Admin SWA column header', 'comic' ),
        );
    }

    public function column_default( $item, $column_name ){
        return $item->{$column_name};
    }

    public function column_cb( $item ){
        return "<input id='comic_squad-{$item->squad_id}' type='checkbox' />";
    }

    public function column_title( $item ){

        // Determine what type of item (row) we're dealing with
//        if ( $item['is_spam'] )
//            $item_status = 'spam';
//        else
//            $item_status = 'all';

        // Preorder items: Reply | Edit | Spam | Delete Permanently
        $actions = array(
//            'reply'  => '',
            'edit'   => '',
//            'spam'   => '',
//            'unspam' => '',
            'delete' => '',
        );

        // Build actions URLs
        $base_url   = get_admin_url(null, 'admin.php?page=comic_squad&amp;aid=' . $item->squad_id );
//        $spam_nonce = esc_html( '_wpnonce=' . wp_create_nonce( 'spam-comic_' . $item->squad_id ) );

//        $delete_url = $base_url . "&amp;action=delete&amp;$spam_nonce";
        $delete_url = $base_url . "&amp;action=delete";
        $edit_url   = $base_url . '&amp;action=edit';
//        $ham_url    = $base_url . "&amp;action=ham&amp;$spam_nonce";
//        $spam_url   = $base_url . "&amp;action=spam&amp;$spam_nonce";

        // Rollover actions

        // Reply - javascript only; implemented by AJAX.

//        if ( 'spam' != $item_status ) {
//            if ( $this->can_comment( $item ) ) {
//                $actions['reply'] = sprintf( '<a href="#" class="reply hide-if-no-js">%s</a>', __( 'Reply', 'comic' ) );
//            } else {
//                $actions['reply'] = sprintf( '<span class="form-input-tip" title="%s">%s</span>', __( 'Replies are disabled for this activity item', 'comic' ), __( 'Replies disabled', 'comic' ) );
//            }
//
//            // Edit
//            $actions['edit'] = sprintf( '<a href="%s">%s</a>', $edit_url, __( 'Edit', 'comic' ) );
//        }
        $actions['edit'] = sprintf( '<a href="%s">%s</a>', $edit_url, __( 'Edit', 'comic' ) );
        // Spam/unspam
//        if ( 'spam' == $item_status )
//            $actions['unspam'] = sprintf( '<a href="%s">%s</a>', $ham_url, __( 'Not Spam', 'comic' ) );
//        else
//            $actions['spam'] = sprintf( '<a href="%s">%s</a>', $spam_url, __( 'Spam', 'comic' ) );


        // Delete
        $actions['delete'] = sprintf( '<a href="%s" onclick="%s">%s</a>', $delete_url, "javascript:return confirm('" . esc_js( __( 'Are you sure?', 'comic' ) ) . "'); ", __( 'Delete Permanently', 'comic' ) );

        // Start timestamp
        echo '<div class="submitted-on">';

        // Other plugins can filter which actions are shown
        $actions = apply_filters( 'bp_activity_admin_comment_row_actions', array_filter( $actions ), $item );

        /* translators: 2: activity admin ui date/time */
        printf( __( 'Submitted on <a href="%1$s">%2$s at %3$s</a>', 'comic' ), get_permalink( $item->squad_id ),
            get_date_from_gmt( $item->date_add,
                get_option( 'date_format' ) ),
            get_date_from_gmt( $item->date_add,
                get_option( 'time_format' ) ) );

        // End timestamp
        echo '</div>';
        $content = $item->title;
        // Get activity content - if not set, use the action
//        if ( ! empty( $item['content'] ) ) {
//            $content = apply_filters_ref_array( 'bp_get_activity_content_body', array( $item['content'] ) );
//        } else {
//            $content = apply_filters_ref_array( 'bp_get_activity_action', array( $item['action'] ) );
//        }

        echo $content . ' ' . $this->row_actions( $actions );

    }

}


class C_Squad_Edit {


    public function display(){


        $squad = C_Core_Class::get( array(
//            'display_comments' => 'stream',
//            'filter'           => $filter,
            'in'               => ! empty( $_REQUEST['aid'] ) ? (int) $_REQUEST['aid'] : 0,
//            'max'              => 1,
//            'page'             => $page,
//            'per_page'         => $per_page,
//            'search_terms'     => $search_terms,
//            'show_hidden'      => true,
            //'sort'             => $sort,
//            'spam'             => $spam,
//            'count_total'      => 'count_query',
            'table_name'        => 'cmc_squad',
            'pk'        => 'squad_id'
        ) );
        $activity = $squad['items'][0];
        // Construct URL for form
        $form_url = remove_query_arg( array( 'action', 'deleted', 'error', 'spammed', 'unspammed', ), $_SERVER['REQUEST_URI'] );
        $form_url = add_query_arg( 'action', 'save', $form_url );
        ?>
        <div class="wrap">
            <?php screen_icon( 'comic-squad' ); ?>
            <?php if(!empty($activity)) :?>
                <h2><?php printf( __( 'Editing Activity (ID #%s)', 'comic' ), number_format_i18n( (int) $_REQUEST['aid'] ) ); ?></h2>
            <?php else: ?>
                <h2>添加新的squad产品</h2>
            <?php endif; ?>

            <form action="<?php echo esc_attr( $form_url ); ?>" id="comic-squad-edit-form" method="post">
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
                                <div id="comic_squad_img" class="postbox">
                                    <h3>图片</h3>
                                    <a href="#" id='add-post-image' class="button insert-media " data-editor="img" title="Add Media"><span class="wp-media-buttons-icon"></span> Add Image</a>
                                    <div id='post-image-frm'>
                                        <?php if(!empty( $activity->img )){ ?>
                                            <img src="<?php echo BLOG_IMAGE_UPLOAD . $activity->img;?>">
                                        <?php } ?>
                                    </div>
                                    <input id='post-image-path' name='img'
                                           type='hidden' value="<?php echo $activity->img; ?>" />
                                    <script>
                                        var addPostImage = document.getElementById('add-post-image');
                                        addPostImage.onmouseup = function(){
                                            this.className += ' hanging';
                                        };
                                    </script>
                                    <div class="inside" style="display:none">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->img:'' ), 'nothing',
                                            array(
                                                'dfw' => true,
                                                'tabfocus_elements' => 'insert-media-button,save-post',
                                                'editor_height' => 360,
                                            ) ); ?>
                                    </div>

                                </div>
                                <div id="comic_squad_content" class="postbox">
                                    <h3><?php _e( 'description', 'comic' ); ?></h3>
                                    <div class="inside">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->description:'' ), 'description',
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
                <?php wp_nonce_field( 'edit-comic-squad_' . ! empty( $activity )?$activity->squad_id:0 ); ?>
            </form>

        </div><!-- .wrap -->
<?php
    }

    public function save() {
        global $wpdb;

        if( isset($_POST['title']) ){
            $this->title = $_POST['title'];
        }
        if( isset($_POST['description']) ){
            $this->description = $_POST['description'];
        }
        if( isset($_POST['img']) ){
            $this->img = $_POST['img'];
        }

        $this->title        = apply_filters_ref_array(
            'comic_squad_title_before_save',
            array(
                $this->title,
                &$this
            )
        );
        $this->description           = apply_filters_ref_array(
            'comic_squad_url_before_save',
            array(
                $this->description,
                &$this
            ) );
        $this->img           = apply_filters_ref_array(
            'comic_squad_url_before_save',
            array(
                $this->img,
                &$this
            ) );
        do_action_ref_array( 'comic_squad_before_save', array( &$this ) );

        if ( empty( $this->title ) || empty( $this->description ) ) {
            return false;
        }
        $this->squad_id = ( isset($_GET['aid']) && !empty( $_GET['aid']) ) ? $_GET['aid'] : 0;
        // If we have an existing ID, update the activity item, otherwise insert it.
        if ( ! empty( $this->squad_id ) ) {
            $sql = "UPDATE cmc_squad SET
title='%s',
img='%s',
description = '%s' WHERE squad_id = '%s'";

            $q = $wpdb->prepare( $sql, $this->title, $this->img, $this->description, $this->squad_id );
        } else {
            $sql = "INSERT INTO cmc_squad SET title = '%s',img = '%s',
description = '%s', last_modified=now(), date_add=now() ";
            $q = $wpdb->prepare( $sql , $this->title, $this->img,$this->description );
        }

        if ( false === $wpdb->query( $q ) ) {
            return false;
        }

        // If this is a new activity item, set the $id property
        if ( empty( $this->squad_id ) ) {
            $this->squad_id = $wpdb->insert_id;

            // If an existing activity item, prevent any changes to the content generating new @mention notifications.
        } else {
            add_filter( 'comic_squad_at_name_do_notifications', '__return_false' );
        }

        /**
         * Fires after an activity item has been saved to the database.
         *
         * @since BuddyPress (1.0.0)
         *
         * @param BP_Activity_Activity Reference to current instance of activity being saved.
         */
        do_action_ref_array( 'comic_squad_after_save', array( &$this ) );

        return true;
    }

}