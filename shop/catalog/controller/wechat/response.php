<?php

class ControllerWechatResponse extends Controller {

    public function join(){

        $this->load->library('wechat/api');
        $wxApi = new Api();

        $wxApi->valid();


    }

    public function index(){


    }

}

?>