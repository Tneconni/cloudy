<?php
class ControllerCheckoutNavigation extends Controller {
    public function index() {

        $this->data['home'] = $this->url->link('common/home');
        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/checkout/navigation.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/checkout/navigation.tpl';
        } else {
            $this->template = 'default/template/checkout/navigation.tpl';
        }

        $this->children = array(

            'common/footer',
            'common/header',
            'common/home_top',
            'common/home_content',
            'module/featured'

        );

        $this->response->setOutput($this->render());

    }

}
