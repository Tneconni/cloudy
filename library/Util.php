<?php
class Util {

    public static function refactorImg( $img ){

        $imgString =  explode('|',trim( $img , '|'))[0];
        $imgSplit = explode('_',$imgString);
        $imgTail = '310x310.jpg';
        if( strpos( end($imgSplit), 'x') !== false ){

            array_splice($imgSplit, count($imgSplit) - 1, 1, $imgTail);

        }else{

            array_push( $imgSplit, $imgTail );

        }

        return implode('_',$imgSplit);

    }
}