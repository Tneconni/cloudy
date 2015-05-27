<?php
require_once('library/pdo/my_pdo.php' );
require_once('app/settings.php');

$id = $_GET['id'];
$sql = "select * from cmc_comic WHERE comic_id='" . $id . "'";
//new MyPdo();
$res = MyPdo::query( $sql );
echo $sql;

foreach( $res as $v ){
    print_r( $v );
}