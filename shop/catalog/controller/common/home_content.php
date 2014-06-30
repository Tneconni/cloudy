<?php

class ControllerCommonHomeContent extends Controller {

    public function index(){


        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/home_content.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/common/home_content.tpl';
        } else {
            $this->template = 'default/template/common/home_content.tpl';
        }

        $this->children = array();

        $this->response->setOutput($this->render());

    }

}

?>