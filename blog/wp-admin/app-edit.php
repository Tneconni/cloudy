<?php

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