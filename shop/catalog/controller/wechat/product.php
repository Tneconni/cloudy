<?php
class ControllerWechatProduct extends Controller {
    private $error = array();

    public function index() {

        $product_id = $this->request->get['product_id'];

        $this->load->model('catalog/product');

        $product_info = $this->model_catalog_product->getProduct( $product_id );

        if ($product_info) {

            $this->load->model('tool/image');
            $this->data['product_info']['name'] = $product_info['name'];
            $this->data['product_info']['description'] = html_entity_decode( $product_info['description'] );

            if( is_file( DIR_IMAGE . $product_info['image'] ) ){

                $image = $this->model_tool_image->resize( $product_info['image'], 50, 50 );

            }else{

                $image = $this->model_tool_image->resize( 'no_image.jpg', 50, 50 );

            }
            $this->data['product_info']['image'] = $image;

            if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/wechat/product.tpl')) {
                $this->template = $this->config->get('config_template') . '/template/wechat/product.tpl';
            } else {
                $this->template = 'default/template/wechat/product.tpl';
            }

            $this->children = array(

                'wechat/footer',
                'wechat/header'

            );

            $this->response->setOutput($this->render());
        }
    }

}
?>