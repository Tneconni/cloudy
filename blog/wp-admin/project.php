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
<a href="#" id="add-post-image"
   class="button insert-media  hanging hanging"
   data-editor="content" title="Add Media">
    <span class="wp-media-buttons-icon"></span>
    Add Image
</a>
<?php


    function projectOutput(){
        global $wpdb;
        $sql = 'SELECT * FROM cld_project';
        $projects = $wpdb->get_results( $sql );

        $dir = dirname( __file__ );
        include( $dir .'/fix/project-tmp.php');
    }

    projectOutput();
?>

<?php
include('./admin-footer.php');
?>