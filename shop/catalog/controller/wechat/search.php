<?php
class ControllerWechatSearch extends Controller {

    public function index(){


        if( isset($this->request->get['searchFilter'] ) ){



        }

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/wechat/search.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/wechat/search.tpl';
        } else {
            $this->template = 'default/template/wechat/search.tpl';
        }

        $this->children = array(

            'wechat/footer',
            'wechat/header'

        );

        $this->response->setOutput($this->render());

    }

}

?>