<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();


//    public function getAllMenu(){
//
//    }

    protected function beforeAction($action){

        $menes = new Menu();
        $this->menu = $menes->getAllMenu();
        if( LESS_COMPILE ){
            $this->compileLess();
        }
        return true;
    }

    private function compileLess(){

            $lessModulePath = dirname(__FILE__).'/less/lessc.inc.php';
            require_once( $lessModulePath );
            $lessc = new lessc();
            $lessIndexPath = dirname( dirname(__FILE__) ).'/assets/less/index.less';
            $cssIndexPath = BASE_URL . '/css/index.css';

            $lessc->checkedCompile( $lessIndexPath, $cssIndexPath);

    }

    public function refactorBlogList( &$posts ){

        foreach( $posts as &$post ){

            $post['ID'] = "/blog/index.php?p=" . $post['ID'];
            $post['image_url'] = UPLOAD_FILE . $post['image_url'];
            $post['post_modified'] = date('M d Y',strtotime($post['post_modified']));

        }

    }

    /**
     *
     *
     */
    public function refactorProjects( &$projects ){

        foreach( $projects as &$project ){

            if( empty($project['link']) ){
                $project['link'] = "index.php?r=project/project&id=" . $project['project_id'];
            }

            $project['image_url'] = "/blog/wp-content/uploads/" . $project['image_url'];

        }

    }

}