<?php
namespace Module;

class Comic extends \MyPdo{

    public function rank(){

        $number = 5;
        $sql = "SELECT * FROM cmc_comic  order by `score` desc limit 0,".$number;
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
        foreach( $res as &$v){

            $v['description'] = trim($v['description']);
            $v['image'] = '/blog/wp-content/uploads/' . $v['image'];

        }
        return $res;

    }
}

