<?php
namespace Module;

class Gift extends \MyPdo{


    public function getList( $data = array(), $limit = 0, $page = 10 ){
        $whereArr = array();
        if( !empty( $data ) ){
            foreach( $data as $key => $v ){
                $whereArr[] = $key . '=' . $v;
            }
        }
        $where = !empty($whereArr) ? 'where ' . implode(' and ', $whereArr ) : '';
        $sql = 'SELECT * FROM cmc_squad ' . $where . ' order by date_add desc LIMIT ' . $limit . ',' . $page;


        $squads = self::query( $sql );
        foreach($squads as &$squad){
            $taoSql = "SELECT
  t.*
FROM
  cmc_tao_to_squad t2s
  INNER JOIN cmc_tao t
    ON t2s.`tao_id` = t.`tao_id`
	WHERE t2s.`squad_id`='" . $squad['squad_id'] . "' LIMIT 0,1 ";

            $tao = self::query($taoSql);
            $squad['imgs'] = array();
            if( $squad['img'] ){
                $squad['imgs'][] = array(
                    'small'  => '/blog/wp-content/uploads/' . $squad['img'],
                    'big'    => '/blog/wp-content/uploads/' . $squad['img']
                );
            }

            if( !empty( $tao ) ){
                $imgArr  =  explode('|',trim($tao[0]['img'],'|'));
                foreach( $imgArr as $img ){

                    $newImg = \Util::refactorImg( $img );
                    $squad['imgs'][] = array(
                        'small'  => $img,
                        'big'    => $newImg
                    );
                }
            }
            $squad['photo'] = $squad['imgs'][0]['big'];
            $squad['description'] = mb_strlen($squad['description'],'utf-8') > 160 ?
                mb_substr($squad['description'],0,160,'utf-8') . '...' : $squad['description'];
        }

        return $squads;
    }

    public function single( $squad_id ){

        $squadSql = "SELECT * FROM cmc_squad WHERE squad_id='$squad_id' LIMIT 0,1";
        $squad = self::query( $squadSql );

        $taoSql = "SELECT
  t.*
FROM
 cmc_tao_to_squad t2s
  LEFT JOIN cmc_tao t
    ON t2s.`tao_id` = t.`tao_id`
WHERE t2s.`squad_id` = '$squad_id'";
        $taos = self::query( $taoSql );

        $taoArr = array();
        foreach( $taos as $tao ){
            $imgArr  =  explode('|',trim($tao['img'],'|'));
            $tao['imgGroup'] = array();
            foreach( $imgArr as $img ){


                if( count($tao['imgGroup']) < 4 ){
                    $newImg = \Util::refactorImg( $img );
                    $tao['imgGroup'][] = array(
                        'small'=> $img,
                        'big'  => $newImg

                    );
                }

            }
            $taoArr[] = $tao;
        }

        $json = array(
            'squad' => $squad[0],
            'taos'  => $taoArr
        );
        return $json ;

    }

    public function banner(){

        return $this->getList( array('hot'=>1), 0, 5 );
    }

}