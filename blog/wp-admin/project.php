<?php
/**
 * Edit Posts Administration Screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( './admin.php' );

require_once('./admin-header.php');
?>

<div>
    this is the project page
</div>
<?php


    function projectOutput(){
        global $wpdb;
        $sql = 'SELECT * FROM cld_project';
        $projects = $wpdb->get_results( $sql );


        $html = "";
        $addProject = "<a href='project-edit.php'>Add new project</a>";
        $html .= $addProject;
        if( !empty($projects) ){
            $html .= "<ul>";
            foreach( $projects as $project ){
                $html .= '<li>';
//                $html .= '<span><a href=\'\'>' . $project->project_id . '</span>';
                $html .= '<span><a href=\'project-edit.php?pjt_id=' . $project->project_id . '\'>' . $project->name . '</a></span>';

                $html .= '<span>' . $project->description . '</span>';
                $html .= '<span>' . $project->iamge_url . '</span>';
                $html .= '<span>' . $project->work_date . '</span>';
                $html .= '<span>' . $project->update . '</span>';
                $html .= '</li>';
            }
            $html .= "</ul>";
        }
        echo $html;
    }

    projectOutput();
?>

<?php
include('./admin-footer.php');
?>