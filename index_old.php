<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
define('DB_PRE','cld_');
define('DB_BLOG_PRE','wp_');
define('BASE_URL', dirname(__FILE__));
define('LESS_COMPILE', true);
define('UPLOAD_FILE', 'blog/wp-content/uploads/');
require_once($yii);

//load less module
$dir = dirname(__FILE__);
//$dir = str_replace('\\', "/", $dir);
/*$lessPath = $dir.'/lessphp/less.inc.php';
require_once( $lessPath );
$less = new lessc();
$less->checkedCompile("input.less", "output.css");*/


Yii::createWebApplication($config)->run();

// master - test