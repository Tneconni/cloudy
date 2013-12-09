<?php
class PostImage{

    public $image_url = '';
    public $post_image_ID = '';
    public $post_ID = '';
    public function __construct( $post_ID = '' ){

        if( empty( $post_ID ) ){
            return null;
        }else{

            global $wpdb;
            $sql = "SELECT * FROM wp_posts_image WHERE post_ID='" . $post_ID ."'";
            $num = $wpdb->query( $sql );
            $lastResult = array();
            if( !empty($num) ){
                $lastResult = $wpdb->last_result[0];
                $this->post_image_ID = $lastResult->post_image_ID;
                $this->post_ID = $lastResult->post_ID;
                $this->image_url = $lastResult->image_url;
            }
        }

    }

    public function editData( $arr ){
        global $wpdb;

        $table = 'wp_' . $arr['table'];
        $fields = $arr['fields'];
        $wheres = $arr['wheres'];
        if( !empty($arr['wheres']) ){
            $wheres = $arr['wheres'];
        }
        if( $arr['operationType'] == 'update' ){
            $res = $wpdb->{$arr['operationType']}($table, $fields, $wheres);
        }else{
            $wpdb->delete($table, $wheres);
            $res = $wpdb->{$arr['operationType']}($table, $fields);
        }
        $this->post_image_ID = $res->post_image_ID;
        $this->post_ID = $res->post_ID;
        $this->image_url = $res->image_url;
        return $res;


    }

    public function initByPostID( $post_ID ){
        global $wpdb;
        $sql = "SELECT * FROM wp_posts_description WHERE post_ID='" . $post_ID ."'";
        $num = $wpdb->query( $sql );
        $lastResult = array();
        if( !empty($num) ){
            $lastResult = $wpdb->last_result[0];
            $this->post_image_ID = $lastResult->post_image_ID;
            $this->post_ID = $lastResult->post_ID;
            $this->image_url = $lastResult->image_url;
        }
    }
}
