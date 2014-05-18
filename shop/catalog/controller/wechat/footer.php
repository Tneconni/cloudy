<?php
class ControllerWechatFooter extends Controller {
    protected function index() {


        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/wechat/footer.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/wechat/footer.tpl';
        } else {
            $this->template = 'default/template/wechat/footer.tpl';
        }

        $this->render();
    }
}
?>