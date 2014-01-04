<?php
/*
 * 该类主要用来 操纵 js app
 *
 *
 * */
class JsApps{

    public function __construct(){

    }

    public function index(){

    }

    public function getList(){

        global $wpdb;
        $sql = 'SELECT * FROM cld_apps';
        $apps = $wpdb->get_results( $sql );

        $dir = dirname( __file__ );
        include( $dir .'/apps-tmp.php');

    }

    public function editApp( $data ){
        global $wpdb;
        $sql = "UPDATE cld_apps SET `name`='" . $data['app_name'] . "',
description='" . $data['app_description'] . "',
image_url='" . $data['app_image'] . "',
link='" . $data['link'] . "',
`update` = '" . Date('Y-m-d H:i:s') . "'
WHERE app_id='" . $data['app_id'] . "' ";
        $ret = $wpdb->get_results( $sql );
        return $ret;
    }

    public function addapp( $data ){
        global $wpdb;

        $sql = "INSERT INTO cld_apps SET
            `name` = '" . $data['app_name'] . "',
            description = '" . $data['app_description'] . "',
            image_url='" . $data['app_image'] . "',
            link='" . $data['link'] . "',
            work_date = '" . Date('Y-m-d H:i:s') . "',
            `update` = '" . Date('Y-m-d H:i:s') . "'";

        $ret = $wpdb->get_results( $sql );
        return $ret;
    }

    public function edit(){

        $app = new stdClass();

        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            $url = 'app.php';
            if(isset($_POST['app_id']) && !empty($_POST['app_id'])){
                $ret = $this->editapp( $_POST );
                header('location: ' . $url);
            }else{
                $ret = $this->addapp( $_POST );
                header('location: ' . $url);
            }

        }

        if( isset($_GET['id']) ){
            global $wpdb;

            $app_id = $_GET['id'];
            $sql = "SELECT * FROM cld_apps WHERE app_id='" . $app_id . "'";
            $apps = $wpdb->get_results( $sql );

            if( !empty($apps) ){

                $app = array_shift($apps);
                $data = array(
                    'app' => $app
                );

                $tpl = 'jsApps-edit-tmp.php';
                $this->output( $tpl, $data );

            }else{
                echo '项目不存在';
            }

        }else{
            //add new app
            $tpl = 'jsApps-edit-tmp.php';
            $this->output( $tpl );

        }

    }

    public function delete(){
        global $wpdb;
        $appIdArr = array();
        $appIds = '';
        if( isset($_POST['appIds']) ){
            $appIdArr = explode('|', $_POST['appIds']);
            $appIds = implode(',',$appIdArr);
        }

        global $wpdb;
        $sql = "DELETE FROM cld_apps WHERE app_id IN (" . $appIds . ")";
        $ret = $wpdb->query( $sql );
        echo json_encode($ret);
        die();
    }

    private function output( $tpl ,$data = null){

        if( !empty( $data ) ){
            $key = key( $data );
            ${$key} = $data[$key];
        }

        $dir = dirname( __file__ );
        $data = "the parameter is vaild";
        if( file_exists($dir . '/' . $tpl) ){
            include($dir . '/' . $tpl);
        }else{
            echo 'not existed';
        }
    }
}
