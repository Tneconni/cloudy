<?php

class ControllerCommonHomeContent extends Controller {

    public function index(){


        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/home_content.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/common/home_content.tpl';
        } else {
            $this->template = 'default/template/common/home_content.tpl';
        }


        $this->data['categories'] = $this->getCategoryProducts(  );

        $this->children = array(  );

        $this->response->setOutput($this->render());

    }

    private function getCategoryProducts(){

        $this->load->model('catalog/category');
        $this->load->model('catalog/product');

        $categories = $this->model_catalog_category->getCategories( );

        $this->data['categories'] = array();

        foreach( $categories as $key => $cat ){

            $categories[$key]['href'] = $this->url->link('product/category', 'path=' . $cat['category_id'] );
            $products = $this->model_catalog_product->getProducts( array(
                'filter_category_id'=> $cat['category_id']
            ) );
//            var_dump( $products );die();

            foreach( $products as &$product ){

                $product['href'] = $this->url->link('product/product', 'product_id=' . $product['product_id'] );
                if( is_file(DIR_IMAGE . $product['image']) ){

                    $product['image'] = $this->model_tool_image->resize($product['image'], '162', '162');

                }else{

                    $product['image'] = $this->model_tool_image->resize( 'no_image.jpg', '162', '162');

                }

            }

            $categories[$key]['products'] = $products;

        }

        return $categories;

    }

}

?>