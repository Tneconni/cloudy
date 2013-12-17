<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-12-17
 * Time: 下午6:13
 * To change this template use File | Settings | File Templates.
 */
require_once( './admin.php' );

require_once('./admin-header.php');
?>

<?php
function projectOutput(){
    global $wpdb;
    if( isset($_GET['pjt_id']) ){
        $project_id = $_GET['pjt_id'];
        $sql = "SELECT * FROM cld_project WHERE project_id='" . $project_id . "'";
        $projects = $wpdb->get_results( $sql );
//        print_r($projects);
        $html = "";
        if( !empty($projects) ){
            $html = "<ul>";
            foreach( $projects as $project ){
                $html .= '<li>';
//                $html .= '<span><a href=\'\'>' . $project->project_id . '</span>';
                $html .= '<span><a href=\'project_edit.php?pjt_id=' . $project->project_id . '\'>' . $project->name . '</a></span>';

                $html .= '<span>' . $project->description . '</span>';
                $html .= '<span>' . $project->iamge_url . '</span>';
                $html .= '<span>' . $project->work_date . '</span>';
                $html .= '<span>' . $project->update . '</span>';
                $html .= '</li>';
            }
            $html .= "</ul>";
        }else{
            $html = '该项目不存在, 我的朋友.';
        }

    }else{
        //添加新的项目

    }

    echo $html;
}

projectOutput();
?>

<?php
include('./admin-footer.php');
?>