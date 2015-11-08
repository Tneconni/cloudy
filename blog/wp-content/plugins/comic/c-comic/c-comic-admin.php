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

        $createUrl = get_admin_url(null, 'admin.php?page=comic_stack&action=create');

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
            'id'   => _x('Comic ID', 'Admin SWA column header', 'comic' ),
            'name'  => _x( '名称', 'Admin SWA column header', 'comic' ),
            'ename'   => _x( '字母名称', 'Admin SWA column header', 'comic' ),
            'score'   => _x( '评分', 'Admin SWA column header', 'comic' ),
            'status' => _x( '状态', 'Admin SWA column header', 'comic' ),
        );
    }

    public function column_default( $item, $column_name ){
        return $item->{$column_name};
    }

    public function column_id( $item ){

        $actions = array(
            'edit'   => '',
            'delete' => '',
        );
        $base_url   = get_admin_url(null, 'admin.php?page=comic_stack&amp;aid=' . $item->comic_id );
        $delete_url = $base_url . "&amp;action=delete";
        $edit_url   = $base_url . '&amp;action=edit';
        $actions['edit'] = sprintf( '<a href="%s">%s</a>', $edit_url, __( 'Edit', 'comic' ) );
        $actions['delete'] = sprintf( '<a href="%s" onclick="%s">%s</a>', $delete_url, "javascript:return confirm('" . esc_js( __( 'Are you sure?', 'comic' ) ) . "'); ", __( 'Delete Permanently', 'comic' ) );


        return $item->comic_id . ' ' . $this->row_actions( $actions );
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

    public function column_score($item){
        echo $item->score;
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

            <form action="<?php echo esc_attr( $form_url ); ?>" id="comic-stack-edit-form" method="post">
                <div id="poststuff">

                    <div id="post-body" class="metabox-holder columns-<?php echo 1 == get_current_screen()->get_columns() ? '1' : '2'; ?>">
                        <div id="post-body-content">
                            <div id="postdiv">
                                <div id="bp_activity_action" class="postbox">
                                    <h3><?php _e( 'Name', 'comic' ); ?></h3>
                                    <div class="inside">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->name : ''), 'name',
                                            array( 'media_buttons' => false, 'textarea_rows' => 7,
                                                'teeny' => true, 'quicktags' =>
                                                array( 'buttons' => 'strong,em,link,block,del,ins,img,code,spell,close' ) ) ); ?>
                                    </div>
                                </div>

                                <div id="comic_ename" class="postbox">
                                    <h3><?php _e( 'Ename', 'comic' ); ?></h3>
                                    <div class="inside">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->ename:'' ), 'ename',
                                            array( 'media_buttons' => false, 'teeny' => true,
                                                'quicktags' =>
                                                    array( 'buttons' => 'strong,em,link,block,del,ins,img,code,spell,close' ) ) ); ?>
                                    </div>
                                </div>

                                <div id="comic_img" class="postbox">
                                    <h3>图片</h3>
                                    <a href="#" id='add-post-image' class="button insert-media " data-editor="img" title="Add Media"><span class="wp-media-buttons-icon"></span> Add Image</a>
                                    <div id='post-image-frm'>
                                        <?php if(!empty( $activity->image )){ ?>
                                            <img src="<?php echo BLOG_IMAGE_UPLOAD . $activity->image;?>">
                                        <?php } ?>
                                    </div>
                                    <input id='post-image-path' name='image'
                                           type='hidden' value="<?php echo $activity->image; ?>" />
                                    <script>
                                        var addPostImage = document.getElementById('add-post-image');
                                        addPostImage.onmouseup = function(){
                                            this.className += ' hanging';
                                        };
                                    </script>
                                    <div class="inside" style="display:none">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->image:'' ), 'nothing',
                                            array(
                                                'dfw' => true,
                                                'tabfocus_elements' => 'insert-media-button,save-post',
                                                'editor_height' => 360,
                                            ) ); ?>
                                    </div>

                                </div>

                                <div id="comic_description" class="postbox">
                                    <h3><?php _e( 'Description', 'comic' ); ?></h3>
                                    <div class="inside">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->description:'' ), 'description',
                                            array( 'media_buttons' => false, 'teeny' => true,
                                                'quicktags' =>
                                                    array( 'buttons' => 'strong,em,link,block,del,ins,img,code,spell,close' ) ) ); ?>
                                    </div>
                                </div>

                                <div id="comic_content" class="postbox">
                                    <h3><?php _e( 'Content', 'comic' ); ?></h3>
                                    <div class="inside">
                                        <?php wp_editor( stripslashes( ! empty( $activity )?$activity->content:'' ), 'content',
                                            array( 'media_buttons' => false, 'teeny' => true,
                                                'quicktags' =>
                                                    array( 'buttons' => 'strong,em,link,block,del,ins,img,code,spell,close' ) ) ); ?>
                                    </div>
                                </div>

                                <div id="comic_score" class="postbox">
                                    <h3><?php _e( 'Score', 'comic' ); ?></h3>
                                    <div class="inside">
                                        <input type="text" name="score" id="score" value="<?php echo $activity->score;?>"  />

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
                <?php wp_nonce_field( 'edit-comic-stack_' . ! empty( $activity )?$activity->comic_id:0 ); ?>
            </form>

        </div><!-- .wrap -->
<?php
    }

    public function save() {
        global $wpdb;

        if( isset($_POST['name']) ){
            $this->name = $_POST['name'];
        }
        if( isset($_POST['ename']) ){
            $this->ename = $_POST['ename'];
        }
        if( isset($_POST['description']) ){
            $this->description = $_POST['description'];
        }
        if( isset($_POST['content']) ){
            $this->content = $_POST['content'];
        }
        if( isset($_POST['score']) ){
            $this->score = $_POST['score'];
        }
        if( isset($_POST['image']) ){
            $this->image = $_POST['image'];
        }
        $this->name        = apply_filters_ref_array(
            'comic_stack_name_before_save',
            array(
                $this->name,
                &$this
            )
        );
        $this->ename           = apply_filters_ref_array(
            'comic_stack_ename_before_save',
            array(
                $this->ename,
                &$this
            ) );
        $this->content           = apply_filters_ref_array(
            'comic_stack_ename_before_save',
            array(
                $this->content,
                &$this
            ) );
        $this->description           = apply_filters_ref_array(
            'comic_stack_ename_before_save',
            array(
                $this->description,
                &$this
            ) );
        $this->score           = apply_filters_ref_array(
            'comic_stack_ename_before_save',
            array(
                $this->score,
                &$this
            ) );
        $this->image           = apply_filters_ref_array(
            'comic_stack_ename_before_save',
            array(
                $this->image,
                &$this
            ) );

        do_action_ref_array( 'comic_stack_before_save', array( &$this ) );

        if ( empty( $this->name ) || empty( $this->ename ) ) {
            return false;
        }
        $this->comic_id = ( isset($_GET['aid']) && !empty( $_GET['aid']) ) ? $_GET['aid'] : 0;
        // If we have an existing ID, update the activity item, otherwise insert it.
        if ( ! empty( $this->comic_id ) ) {
            $sql = "UPDATE cmc_comic SET
name='%s',
ename = '%s',
 image = '%s',
 description = '%s',
 content = '%s',
 score = '%s' WHERE comic_id = '%s'";
            $q = $wpdb->prepare( $sql, $this->name, $this->ename, $this->image, $this->description, $this->content, $this->score, $this->comic_id );
        } else {
            $sql = "INSERT INTO cmc_comic SET name = '%s',
ename = '%s',
image = '%s',
 description = '%s',
 content = '%s',
 score = '%s',
 status='1' ";
            $q = $wpdb->prepare( $sql , $this->name,$this->ename, $this->image, $this->description, $this->content, $this->score );
        }

        if ( false === $wpdb->query( $q ) ) {
            return false;
        }

        // If this is a new activity item, set the $id property
        if ( empty( $this->comic_id ) ) {
            $this->comic_id = $wpdb->insert_id;

            // If an existing activity item, prevent any changes to the content generating new @mention notifications.
        } else {
            add_filter( 'comic_at_name_do_notifications', '__return_false' );
        }

        /**
         * Fires after an activity item has been saved to the database.
         *
         * @since BuddyPress (1.0.0)
         *
         * @param BP_Activity_Activity Reference to current instance of activity being saved.
         */
        do_action_ref_array( 'comic_after_save', array( &$this ) );

        return true;
    }

    public function delete( $comicId ){
        global $wpdb;
        $sql = "delete from cmc_comic  WHERE comic_id = '%s'";
        $q = $wpdb->prepare( $sql, $comicId  );
        if ( false === $wpdb->query( $q ) ) {
            return false;
        }
    }

}