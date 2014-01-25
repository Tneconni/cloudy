<?php
/*
 * 该类主要用来 操纵 js app
 *
 *
 * */
class JsApps{

    public $template = '';
    private $data = array();
    public function __construct(){

    }

    public function index(){

    }

    public function editApp( $data ){
        global $wpdb;
        $sql = "UPDATE cld_apps SET `name`='" . $data['app_name'] . "',
description='" . $data['app_description'] . "',
image_url='" . $data['app_image'] . "',
link='" . $data['app_link'] . "',
`update` = '" . Date('Y-m-d H:i:s') . "'
WHERE app_id='" . $data['app_id'] . "' ";
        $ret = $wpdb->get_results( $sql );

        return $ret;

    }

    public function addApp( $data ){
        global $wpdb;

        $sql = "INSERT INTO cld_apps SET
            `name` = '" . $data['app_name'] . "',
            description = '" . $data['app_description'] . "',
            image_url='" . $data['app_image'] . "',
            link='" . $data['app_link'] . "',
            work_date = '" . Date('Y-m-d H:i:s') . "',
            `update` = '" . Date('Y-m-d H:i:s') . "'";

        $ret = $wpdb->get_results( $sql );
        return $ret;
    }

    public function edit(){

        $app = new stdClass();

        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            $url = 'apps.php';
            if(isset($_POST['app_id']) && !empty($_POST['app_id'])){
                $ret = $this->editApp( $_POST );
                header('location: ' . $url);
            }else{
                $ret = $this->addApp( $_POST );
                header('location: ' . $url);
            }

        }

        if( isset($_GET['app_id']) ){
            global $wpdb;

            $app_id = $_GET['app_id'];
            $this->data['appId'] = $app_id;
            $sql = "SELECT * FROM cld_apps WHERE app_id='" . $app_id . "'";
            $app = $wpdb->get_results( $sql );
            if( !empty( $app ) ){
                $this->data['app'] = $app[0];
            }else{
                $this->data['app'] = array();
            }

        }else{
            //add new app
            $app = new stdClass();
            $app->name = '';
            $app->description = '';
            $app->image_url = '';
            $app->link = '';
            $app->work_date = '';
            $app->update = '';
            $this->data['app'] = $app;
        }

        $this->template = 'edit.php';
        $this->output();

    }

    public function delete(){
        $projectIdArr = array();
        $projectIds = '';
        if( isset($_POST['projectIds']) ){
            $projectIdArr = explode('|', $_POST['projectIds']);
            $projectIds = implode(',',$projectIdArr);
        }

        global $wpdb;
        $sql = "DELETE FROM cld_project WHERE project_id IN (" . $projectIds . ")";
        $ret = $wpdb->query( $sql );
        echo json_encode($ret);
        die();
    }

    private function output(){

        $dir = dirname(dirname( __file__ ));
        $tplDir = $dir . '/fix-template/apps';
        $tpl = $this->template;

        foreach($this->data as $key=>$value ){

            ${$key} = $value;

        }

        if( file_exists($tplDir . '/' . $tpl) ){
            include($tplDir . '/' . $tpl);
        }else{
            echo 'not existed';
        }
    }


    public function getList(){
        global $wpdb;
        $sql = "SELECT * FROM cld_apps";
        $appList = $wpdb->get_results( $sql );

        foreach( $appList as $k => $v ){
            $appList[$k]->url = "apps-edit.php?app_id=" . $v->app_id;
        }



        $this->data['appList'] = $appList;
        $this->template = "list.php";
        $this->output();


    }


}
