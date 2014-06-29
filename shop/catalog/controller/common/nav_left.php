<?php

class ControllerCommonNavLeft extends Controller {
    protected function index() {


        $this->data['categories'] = array();
        $this->load->model('catalog/category');

        $categories = $this->model_catalog_category->getCategories(0);

        foreach ($categories as $category) {
            $total = $this->model_catalog_product->getTotalProducts(array('filter_category_id' => $category['category_id']));

            $children_data = array();

            $children = $this->model_catalog_category->getCategories($category['category_id']);

            foreach ($children as $child) {
                $data = array(
                    'filter_category_id'  => $child['category_id'],
                    'filter_sub_category' => true
                );

                $product_total = $this->model_catalog_product->getTotalProducts($data);

                $total += $product_total;

                $children_data[] = array(
                    'category_id' => $child['category_id'],
                    'name'        => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $product_total . ')' : ''),
                    'href'        => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
                );
            }

            $this->data['categories'][] = array(
                'category_id' => $category['category_id'],
                'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $total . ')' : ''),
                'children'    => $children_data,
                'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
            );
        }

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/nav_left.tpl')) {
            $this->template = $this->config->get('config_template') . '/template/common/nav_left.tpl';
        } else {
            $this->template = 'default/template/common/nav_left.tpl';
        }

        $this->render();
    }
}
?>
