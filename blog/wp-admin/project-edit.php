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

require_once('./admin-header.php');
?>

<?php
require_once('./fix/project.php');
    $pjt = new Project();
    $pjt->edit();

/*function projectOutput(){
    global $wpdb;

    if( isset($_GET['pjt_id']) ){
        $project_id = $_GET['pjt_id'];
        $sql = "SELECT * FROM cld_project WHERE project_id='" . $project_id . "'";
        $projects = $wpdb->get_results( $sql );
//        print_r($projects);
        $html = "";
        if( !empty($projects) ){

            $project = array_shift($projects); print_r($project);
            echo <<<EOT
<div class=''>
        <form action='' method="post" >
            <input type='text' name='project_name' value="$project->name" />
            <div id='' >
                <button>图片</button>
                <input type='hidden' name='project_image' />
            </div>

            <textarea name='project_description' >
                $project->description;
            </textarea>
        </form>
    </div>
EOT;
        }else{
            echo '项目不存在';
        }

    }else{
        //add new project
        echo <<<EOT
<div class=''>
        <form action='' method="post" >
            <input type='text' name='project_name' value="" />
            <div id='' >
                <button>图片</button>
                <input type='hidden' name='project_image' />
            </div>

            <textarea name='project_description' >
            </textarea>
        </form>
    </div>
EOT;
    }

}*/
?>
<?php
//projectOutput();
?>

<?php include('./admin-footer.php'); ?>