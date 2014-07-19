<?php
class ControllerCommonNavigation extends Controller {
    protected function index() {


        $this->children = array(

            'common/nav_left'

        );

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/navigation.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/common/navigation.tpl';
        }else {
            $this->template = 'default/template/common/navigation.tpl';
        }

        $this->render();
    }
}
?>
