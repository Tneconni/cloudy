<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 14-2-8
 * Time: 下午4:07
 * To change this template use File | Settings | File Templates.
 */
class swipeJsController extends Controller{

    public function actionIndex(){

        $models = new CActiveDataProvider( 'Apps' );

        $this->render('index',array(
            'model'=> $models
        ));
    }
}