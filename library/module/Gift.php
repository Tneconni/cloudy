<?php
namespace Module;

class Gift extends \MyPdo{


    public function getList(){

        $sql = 'SELECT * FROM cmc_squad order by date_add desc LIMIT 0,10';


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

}