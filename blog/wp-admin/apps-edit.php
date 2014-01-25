<?php
require_once( './admin.php' );
require_once('./admin-header.php');
?>

<?php

require_once('./fix/jsApps.php');
$jsApp = new JsApps();
if( isset($_GET['app_id']) ){
    $jsApp->edit( $_GET['app_id']);
}else{
    $jsApp->edit();
}

?>
<?php
//projectOutput();
?>

<?php include('./admin-footer.php'); ?>