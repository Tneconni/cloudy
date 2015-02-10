<?php

class C_News_List_Table extends WP_List_Table{

    public $table_name = 'c_comic_news';
    public function __construct(){

        parent::__construct( array(
            'ajax'     => false,
            'plural'   => 'comic_news',
            'singular' => 'comic_news',
            'screen'   => get_current_screen(),
        ) );

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
            'table_name'        => 'cmc_news'
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
        return "<input id='comic_news-{$item->news_id}' type='checkbox' />";
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
        $base_url   = get_admin_url( 'admin.php?page=comic_news&amp;aid=' . $item->news_id );
        $spam_nonce = esc_html( '_wpnonce=' . wp_create_nonce( 'spam-comic_' . $item->news_id ) );

        $delete_url = $base_url . "&amp;action=delete&amp;$spam_nonce";
        $edit_url   = $base_url . '&amp;action=edit';
//        $ham_url    = $base_url . "&amp;action=ham&amp;$spam_nonce";
//        $spam_url   = $base_url . "&amp;action=spam&amp;$spam_nonce";

        // Rollover actions

        // Reply - javascript only; implemented by AJAX.
/*
        if ( 'spam' != $item_status ) {
            if ( $this->can_comment( $item ) ) {
                $actions['reply'] = sprintf( '<a href="#" class="reply hide-if-no-js">%s</a>', __( 'Reply', 'buddypress' ) );
            } else {
                $actions['reply'] = sprintf( '<span class="form-input-tip" title="%s">%s</span>', __( 'Replies are disabled for this activity item', 'buddypress' ), __( 'Replies disabled', 'buddypress' ) );
            }

            // Edit
            $actions['edit'] = sprintf( '<a href="%s">%s</a>', $edit_url, __( 'Edit', 'buddypress' ) );
        }

        // Spam/unspam
        if ( 'spam' == $item_status )
            $actions['unspam'] = sprintf( '<a href="%s">%s</a>', $ham_url, __( 'Not Spam', 'buddypress' ) );
        else
            $actions['spam'] = sprintf( '<a href="%s">%s</a>', $spam_url, __( 'Spam', 'buddypress' ) );
*/

        // Delete
        $actions['delete'] = sprintf( '<a href="%s" onclick="%s">%s</a>', $delete_url, "javascript:return confirm('" . esc_js( __( 'Are you sure?', 'buddypress' ) ) . "'); ", __( 'Delete Permanently', 'buddypress' ) );

        // Start timestamp
        echo '<div class="submitted-on">';

        // Other plugins can filter which actions are shown
        $actions = apply_filters( 'bp_activity_admin_comment_row_actions', array_filter( $actions ), $item );

        /* translators: 2: activity admin ui date/time */
        printf( __( 'Submitted on <a href="%1$s">%2$s at %3$s</a>', 'buddypress' ), get_permalink( $item->news_id ),
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


