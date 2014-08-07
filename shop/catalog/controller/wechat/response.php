<?php

class ControllerWechatResponse extends Controller {

    public $fromUsername;
    public $toUsername;
    public $keyword;
    public $time;
    public $textTpl;

    public function join2(){

        $this->load->library('wechat/api');
        $wxApi = new Api();

        if( isset($_GET["echostr"]) ){

            $wxApi->valid();
        }else{

            $this->responseMsg();

        }

    }

    public function join(){

        $this->load->library('wechat/api');
        $wxApi = new Api();

        if( isset($_GET["echostr"]) ){

            $wxApi->valid();
        }else{

            $this->responseMsg();

        }

    }

    public function recordLog( $data ){

        global $db;
        $sql = "INSERT INTO `" . DB_PREFIX . "wechat_log` SET
            `type`='0',
            `content` = '" . $data['content'] . "',
            `wechat_id` = '" . $data['wechat_id'] . "',
            `open_id` = '" . $data['open_id'] . "',
            `date_added`=NOW()";
        $db->query( $sql );

    }

    public function responseMsg()
    {
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data
        if (!empty($postStr)){

            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $this->recordLog(array(

                'content'=> $postObj->Content,
                'open_id'=> $postObj->FromUserName,
                'wechat_id'=> $postObj->ToUserName

            ));
            $this->fromUsername = $postObj->FromUserName;
            $this->toUsername = $postObj->ToUserName;

            $this->keyword = trim($postObj->Content);
            $this->time = time();

            $this->textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";

            $this->welcome();

        }else {
            echo "";
            exit;
        }
    }

    public function welcome(){

        if(!empty( $this->keyword ))
        {

            $msgType = "text";

            $home = $this->url->link('wechat/home');

            $contentStr = "<a href='" . $home . "'>Mankaa动漫城</a>" ;

            $resultStr = sprintf($this->textTpl, $this->fromUsername, $this->toUsername, $this->time, $msgType, $contentStr);
            echo $resultStr;

        }else{

            echo "Input something...";

        }

    }

}

?>