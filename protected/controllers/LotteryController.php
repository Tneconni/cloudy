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

        $lotteryCustomer = new LotteryCustomer();
        $members = $lotteryCustomer->getNonwinners();
        $luckyDogs = $lotteryCustomer->getLuckyDogs();
        $lotteryType = array(
            '抽奖完毕',
            'Special Prize',
            'First Prize',
            'First Prize',
            'First Prize'
        );
        $luckyDogsCount = count( $luckyDogs );
        $this->render('index',array(
            'members'   => $members,
            'luckyDogs' => $luckyDogs,
            'luckyDogsCount' => $luckyDogsCount,
            'lotteryType'=>$lotteryType
        ));
    }

    public function actionGetLuckyDog(){

        $res = array(
            'status'=>false,
            'no'=>'',
            'prize'=>'2'
        );
        $num = 0;
        $res['prize'] = $_POST['prize'];
        $lotteryCustomer = new LotteryCustomer();
        $num = $lotteryCustomer->getNonwinnersCount();

        $luckyNum = rand(0, $num);
        $luckyDog = $lotteryCustomer->getLuckyDogByTurn( $luckyNum );
        $res['no'] = $luckyDog['lottery_customer_id'];
        $res['name'] = $luckyDog['name'];
        $ret = $lotteryCustomer->setLuckyDogPrize( $res['no'], $res['prize'] );
        if( $ret ){
            $res['status'] = true;
        }else{

        }
        echo json_encode( $res );
    }

    private function getLuckyDogByNo( $luckyNum ){

        return 'Anonymous';
    }

    public function actionInitMember(){

        $protectedDir = dirname(dirname(__FILE__));
        $path = $protectedDir . '/assets/img/lottery';
        $filelist=array();
        $memberList = array();
        if($handle=opendir($path)){
            while (($file=readdir($handle))!==false){
                if($file!="." && $file !=".."){
                    if(is_dir($path."/".$file)){
//                        $filelist=array_merge($filelist,my_scandir($path."/".$file));
                    }else{
                        $filelist[]=$path."/".$file;
                        $fileArr = explode('.',$file);
                        $member = array(
                            'img_url'=>$file,
                            'name'=> $fileArr[0]
                        );
                        $memberList[] = $member;
                    }
                }
            }
        }
        closedir($handle);
        print_r( $memberList );
        $ret = LotteryCustomer::addParticipant( $memberList );
        if( $ret ){
            echo '导入成功';
        }else{
            echo '导入失败';
        }

    }

    public function actionSetLottery(){
        $param = array();

        if( isset( $_POST['name'] )){
            $param['name'] = $_POST['name'];
        }

        if( isset( $_POST['lottery_customer_id'] )){
            $param['lottery_customer_id'] = $_POST['lottery_customer_id'];
        }

        if( isset( $_POST['lottery_level'] )){
            $param['lottery_level'] = $_POST['lottery_level'];
        }
        $lotteryCustomer = new LotteryCustomer();
        $prize = $lotteryCustomer->setLottery( $param );

        echo json_encode( $prize );
    }

    public function actionInitLottery(){
        $lotteryCustomer = new LotteryCustomer();
        $ret = $lotteryCustomer->initLottery();
        echo json_encode( $ret );
    }
}