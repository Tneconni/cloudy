<?php

class GalleryController extends Controller{

    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'

        $menuTable = new Menu();
        $res = $menuTable->getAllMenu();

        $parts = new Parts();

        $apps = $parts->getPartsByOrder();
        $this->render('index',array(
            'gallery' => '',
            'apps'    => $apps
        ));
    }

    public function actionSearch(){



    }

}