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

    public function editApp( $data ){
        global $wpdb;
        $sql = "UPDATE cld_project SET `name`='" . $data['project_name'] . "',
description='" . $data['project_description'] . "',
iamge_url='" . $data['project_image'] . "',
link='" . $data['link'] . "',
`update` = '" . Date('Y-m-d H:i:s') . "'
WHERE project_id='" . $data['project_id'] . "' ";
        $ret = $wpdb->get_results( $sql );
        return $ret;
    }

    public function addProject( $data ){
        global $wpdb;

        $sql = "INSERT INTO cld_project SET
            `name` = '" . $data['project_name'] . "',
            description = '" . $data['project_description'] . "',
            iamge_url='" . $data['project_image'] . "',
            link='" . $data['link'] . "',
            work_date = '" . Date('Y-m-d H:i:s') . "',
            `update` = '" . Date('Y-m-d H:i:s') . "'";

        $ret = $wpdb->get_results( $sql );
        return $ret;
    }

    public function edit(){

        $project = new stdClass();

        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            $url = 'project.php';
            if(isset($_POST['project_id']) && !empty($_POST['project_id'])){
                $ret = $this->editProject( $_POST );
                header('location: ' . $url);
            }else{
                $ret = $this->addProject( $_POST );
                header('location: ' . $url);
            }

        }

        if( isset($_GET['pjt_id']) ){
            global $wpdb;

            $project_id = $_GET['pjt_id'];
            $sql = "SELECT * FROM cld_project WHERE project_id='" . $project_id . "'";
            $projects = $wpdb->get_results( $sql );

            if( !empty($projects) ){

                $project = array_shift($projects);
                print_r($project);

                $this->output( $project );

            }else{
                echo '项目不存在';
            }

        }else{
            //add new project
            $tpl = 'jsApps-edit-tmp.php';
            $this->output( $tpl );

        }

    }

    public function delete(){
        global $wpdb;
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

    private function output( $tpl ){
//        include('./project-edit-tmp.php');
        $dir = dirname( __file__ );
        $data = "the parameter is vaild";
        if( file_exists($dir . '/' . $tpl) ){
            include($dir . '/' . $tpl);
        }else{
            echo 'not existed';
        }
    }
}
