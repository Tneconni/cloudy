<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 13-12-30
 * Time: 下午8:53
 * To change this template use File | Settings | File Templates.
 */
require_once( './admin.php' );
require_once('./admin-header.php');
?>

<?php
require_once('./fix/jsApps.php');
$jsApp = new JsApps();
$jsApp->edit();

?>
<?php
//projectOutput();
?>

<?php include('./admin-footer.php'); ?>