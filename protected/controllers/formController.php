<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 14-3-25
 * Time: 下午10:17
 * To change this template use File | Settings | File Templates.
 */

class FormController extends Controller{

    public function actionIndex(){

        

        $this->render('index',array(
            'gallery' => '',
            'apps'    => ''
        ));

    }

}

?>