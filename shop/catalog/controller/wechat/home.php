<?php
class ControllerWechatHome extends Controller {


    public function index(){

        $this->load->model('catalog/product');

        $data = array(
            'filter_category_id' => 59
        );
        $products = $this->model_catalog_product->getProducts( $data );

        $this->load->model('tool/image');

        $this->data['products'] = array();
        foreach( $products as $key=>$product ){
            $this->data['products'][$key]['name'] = $product['name'];

            if( is_file( DIR_IMAGE . $product['image'] ) ){
                $image = $this->model_tool_image->resize( $product['image'], 420, 140 );
            }else{
                $image = $this->model_tool_image->resize( 'no_image.jpg', 420, 140 );
            }

            $this->data['products'][$key]['image'] = $image;
            $this->data['products'][$key]['description'] = html_entity_decode( $product['description'] );
            $this->data['products'][$key]['link'] = $this->url->link('wechat/product',
                'product_id=' . $product['product_id']);



        }

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/wechat/home.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/wechat/home.tpl';
        } else {
            $this->template = 'default/template/wechat/home.tpl';
        }

        $this->children = array(

            'wechat/footer',
            'wechat/header'

        );

        $this->response->setOutput($this->render());

    }


}
?>