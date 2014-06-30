<?php
class ControllerCommonHomeTop extends Controller {
    public function index() {


        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/home_top.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/common/home_top.tpl';
        } else {
            $this->template = 'default/template/common/home_top.tpl';
        }

        $this->children = array(

            'common/home_banner',
            'module/information'

        );

        $this->response->setOutput($this->render());
    }
}
?>