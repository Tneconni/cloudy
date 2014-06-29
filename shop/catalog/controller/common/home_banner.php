<?php

class ControllerCommonHomeBanner extends Controller {
    protected function index() {


        $this->load->model('design/banner');
        $this->load->model('tool/image');

        $this->data['banners'] = array();

        $setting = array(
            'banner_id' => '9',
            'width' => '590',
            'height' => '280'
        );

        $results = $this->model_design_banner->getBanner($setting['banner_id']);

        foreach ($results as $result) {
            if (file_exists(DIR_IMAGE . $result['image'])) {
                $this->data['banners'][] = array(
                    'title' => $result['title'],
                    'link'  => $result['link'],
                    'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
                );
            }
        }

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/home_banner.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/common/home_banner.tpl';
        } else {
            $this->template = 'default/template/common/home_banner.tpl';
        }

        $this->render();
    }
}
?>
