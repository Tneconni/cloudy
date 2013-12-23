<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-12-18
 * Time: 上午11:01
 * To change this template use File | Settings | File Templates.

 **/
class Project{

    public function __construct(){

    }

    public function index(){

    }

    public function editProject( $data ){
        global $wpdb;
        $sql = "UPDATE cld_project SET `name`='" . $data['project_name'] . "',
description='" . $data['project_description'] . "',
iamge_url='" . $data['project_image'] . "',
link='" . $data['link'] . "'
WHERE project_id='" . $data['project_id'] . "' ";

        $ret = $wpdb->get_results( $sql );
        return $ret;
    }

    public function addProject( $data ){
        global $wpdb;

        $sql = "INSERT INTO cld_project SET
            `name` = '" . $data['project_name'] . "',
            description = '" . $data['project_description'] . "',
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
            $this->output( $project );

        }

    }

    private function output( $project ){

        echo <<<EOT
<div class=''>
        <form action='' method="post" >
            <input type='hidden' name='project_id' value="$project->project_id" />

            <input type='text' name='project_name' value="$project->name" />
            <div id='' >
                <span>图片</span>
                <input type='hidden' name='project_image' />
            </div>
            作品链接：<input type='text' name='link' value="$project->link" />

            <textarea name='project_description' >
                $project->description;
            </textarea>
            <button>提交</button>
        </form>
    </div>
EOT;
    }
}
