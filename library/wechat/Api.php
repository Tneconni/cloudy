<?php
class Api {

    public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = 'weixin';
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    public function responseMsg( $app )
    {
        //get post data, May be due to the different environments
//        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        $postStr = file_get_contents("php://input");
        //extract post data
        if (!empty($postStr)){

            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $app->getLog()->getWriter()->write( '$fromUsername  :: ' . $fromUsername );
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";


            if(!empty( $keyword ))
            {
//                $msgType = "text";
//                $contentStr = "欢迎光临漫客小屋!";
//                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);

                $param = array(
                    'fromUsername'=> $fromUsername,
                    'toUsername'=>$toUsername,
                    'time'=>$time,
                    'msgType'=>'news'
                );
                $response = $this->getResponseTmp( $param );
                echo $response;
            }else{
                echo "Input something...";
            }

        }else {
            echo "";
            exit;
        }
    }

    public function getResponseTmp( $data ){

        $xmlStart = "<xml>
<ToUserName><![CDATA[" . $data['fromUsername'] . "]]></ToUserName>
<FromUserName><![CDATA[" . $data['toUsername'] . "]]></FromUserName>
<CreateTime>" . $data['time'] . "</CreateTime>
<MsgType><![CDATA[" . $data['msgType'] . "]]></MsgType>
<ArticleCount>2</ArticleCount>
<Articles>";

        $xmlEnd = "</Articles></xml> ";

            $itemTmp = "<item>
<Title><![CDATA[漫客小屋]]></Title>
<Description><![CDATA[漫迷落脚的小屋]]></Description>
<PicUrl><![CDATA[https://mp.weixin.qq.com/cgi-bin/getimgdata?token=496425256&msgid=&mode=large&source=file&fileId=200464405&ow=-1]]></PicUrl>
<Url><![CDATA[http://121/42/42/110/cloudy/app/poker]]></Url>
</item><item>
<Title><![CDATA[漫客小屋]]></Title>
<Description><![CDATA[选出你心目中的英雄]]></Description>
<PicUrl><![CDATA[https://mp.weixin.qq.com/cgi-bin/getimgdata?token=496425256&msgid=&mode=large&source=file&fileId=200457948&ow=-1]]></PicUrl>
<Url><![CDATA[http://121/42/42/110/cloudy/app/poker]]></Url>
</item>";

        return $xmlStart . $itemTmp . $xmlEnd;

    }

}

?>