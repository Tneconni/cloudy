<?php
class PostDescription{

    public $content = '';
    public $post_ID = '';
    public $post_description_ID = '';
    public function index(){

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
        return $res;
    }

    public function initByPostID( $post_ID ){
        global $wpdb;
        $sql = "SELECT * FROM wp_posts_description WHERE post_ID='" . $post_ID ."'";
        $num = $wpdb->query( $sql );
        $lastResult = array();
        if( !empty($num) ){
            $lastResult = $wpdb->last_result[0];
            $this->content = $lastResult->content;
            $this->post_ID = $lastResult->post_ID;
            $this->post_description_ID = $lastResult->post_description_ID;
        }
    }
}
