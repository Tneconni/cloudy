<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-10-12
 * Time: 上午11:59
 * To change this template use File | Settings | File Templates.
 */

class PartsController extends Controller{

    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'

        $app = new stdClass();
        if( isset($_GET['parts_id']) ){

            $parts = new Parts();
            $app = $parts->findByPk(array(
                'id' => $_GET['parts_id']
            ));

        }else{

        }

        $this->render('index',array(
            'app' => $app
        ));
    }



    public function actionParts(){



    }
}