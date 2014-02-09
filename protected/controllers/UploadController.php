<?php
<<<<<<< Updated upstream

class GalleryController extends Controller{

    public function actionIndex(){

        error_reporting(E_ALL | E_STRICT);
        require('UploadHandler.php');
        $upload_handler = new UploadHandler();


        $this->render('index',array(
            'gallery' => '',
            'apps'    => ''
=======
/**
 * Class UploadController
 * 上传图片测试
 *
 */
class UploadController extends Controller{

    public function actionIndex(){



        $this->render('index',array(
            '' => '',
            '' => ''
>>>>>>> Stashed changes
        ));
    }


<<<<<<< Updated upstream
}
=======
    public function actionEdit(){


    }


}

>>>>>>> Stashed changes
