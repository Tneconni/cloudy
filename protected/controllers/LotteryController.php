<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-10-12
 * Time: 上午11:59
 * To change this template use File | Settings | File Templates.
 */

class LotteryController extends Controller{

    public function actionIndex(){


        $this->render('index',array(
            'app' => ''
        ));
    }

    public function actionGetLuckyDog(){
        $res = array(
            'luckyDog'=>'',
            'no'=>'',
            'prize'=>'2'
        );
        $num = 54;

        $luckyNum = rand(0, $num);
        $res['no'] = $luckyNum;
        $res['luckyDog'] = $this->getLuckyDogByNo( $luckyNum );


        echo json_encode( $luckyNum );
    }

    private function getLuckyDogByNo( $luckyNum ){

        return 'Anonymous';
    }

}