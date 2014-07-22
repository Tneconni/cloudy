<?php
class ControllerCommonQqLogin extends Controller {

    public function index() {
//        print_r( $this->request->get ); die();
        if( isset($this->request->get['access_token']) ){
            print_r( $this->request->get );
            $access_token = $this->request->get['access_token'];

            $openId = $this->getOpenId( $access_token );
            $this->get_qq_user_info($access_token, $openId);
        }

    }

    public function getOpenId( $access_token ){


        $url = "https://graph.qq.com/oauth2.0/me?access_token=" . $access_token;
        $res = file_get_contents($url);

        $res_filter = preg_replace("/^(callback\()|(\);)$/", '', $res);
        $res_json = json_decode( $res_filter );

        return $res_json->openid;
    }

    public function get_qq_user_info( $access_token, $openid ){

        $url = "https://graph.qq.com/user/get_user_info";

        $params = array(
            'access_token=' . $access_token,
            'openid=' . $openid,
            'oauth_consumer_key=101140571'
        );

        $url_param = implode( '&', $params );
        $url .= '?' . $url_param;

        $contents = file_get_contents( $url );
        $qqInfo = json_decode( $contents );
        $qqInfo->open_id = $openid;
        $this->load->model('account/customer');
        $existed = $this->model_account_customer->findQQInfoByOpenId( $openid );

        if( !$existed ){

            $this->model_account_customer->getQQInfo( $qqInfo );

        }

        global $log;
        $log->write('qq_info : ' . $contents);

    }

}
