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
require_once('./fix/project.php');
    $pjt = new Project();
    $pjt->edit();

?>
<?php
//projectOutput();
?>

<?php include('./admin-footer.php'); ?>




