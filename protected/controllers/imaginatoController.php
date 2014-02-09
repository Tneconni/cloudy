<?php
// guaiguaide
class ImaginatoController extends Controller{


    public function actionIndex(){

        $this->render('index',array(
            'gallery' => '',
            'apps'    => ''
        ));

    }

}