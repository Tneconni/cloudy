<?php

class GalleryController extends Controller{

    public function actionIndex(){

        error_reporting(E_ALL | E_STRICT);
        require('UploadHandler.php');
        $upload_handler = new UploadHandler();


        $this->render('index',array(
            'gallery' => '',
            'apps'    => ''
        ));
    }


}