<?php
class ControllerCommonSearchBar extends Controller {
    protected function index() {

        $this->data['home'] = $this->url->link('common/home');
        $this->data['searchUrl'] = $this->url->link('product/search');

        if (isset($this->request->get['search'])) {
            $this->data['search'] = $this->request->get['search'];
        } else {
            $this->data['search'] = '';
        }

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/search_bar.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/common/search_bar.tpl';
        }else {
            $this->template = 'default/template/common/search_bar.tpl';
        }

        $this->render();
    }
}
?>
