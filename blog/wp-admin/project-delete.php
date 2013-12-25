
<?php
require_once( './admin.php' );
//require_once('./admin-header.php');

require_once('./fix/project.php');
$pjt = new Project();
$pjt->delete();

?>
