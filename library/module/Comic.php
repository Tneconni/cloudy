<?php
namespace Module;

class Comic extends \MyPdo{

    public function rank( $limit = 5 , $page = 0 ){

        $start = $limit * $page ;
        $sql = "SELECT * FROM cmc_comic  order by `score` desc limit $start,$limit";
        $res = \MyPdo::query( $sql );
        foreach( $res as &$v){

            $v['description'] = trim($v['description']);
            $v['image'] = '/blog/wp-content/uploads/' . $v['image'];

        }
        return $res;
    }

    /**
     * 获取单个comic
     */
    public function detail( $comic_id ){

        $sql = "SELECT * FROM cmc_comic WHERE comic_id ='" . $comic_id . "'";

        $res = \MyPdo::query( $sql );
        $comic = $res[0];
        $comic['description'] = trim($comic['description']);
        $comic['image'] = '/blog/wp-content/uploads/' . $comic['image'];
        return $comic;

    }
}

