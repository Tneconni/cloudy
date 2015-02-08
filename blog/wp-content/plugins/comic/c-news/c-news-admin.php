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

        $this->_column_headers = array(
            $this->get_columns(),
            array(),
            $this->get_sortable_columns()
        );

        $this->items = C_Core_Class::get( $this );
//        print_r( $this->items);
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


}


