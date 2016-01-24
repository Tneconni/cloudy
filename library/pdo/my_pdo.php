<?php

class MyPdo{

    private static $start = false;
    private static $pdo;

    public function __construct(){

        $this->init();

    }

    public static function exec( $sql ){

        if( self::$start == false ){

            new MyPdo();
            self::$start = true;

        }

        return self::$pdo->exec( $sql );

    }

    public static function query( $sql ){

        if( self::$start == false ){

            new MyPdo();
            self::$start = true;

        }

        $res = array();
        $query = self::$pdo->query( $sql );
        if( !empty( $query ) ){
            foreach( $query as $single ){

                $res[] = $single ;
            }

        }
        return $res;

    }

    private function init(){

//        $dsn = "mysql:host=localhost;dbname=tneconni";
//        self::$pdo = new PDO($dsn, 'root', '');

        $dsn = "mysql:host=rds2t146085kg0yme308.mysql.rds.aliyuncs.com;dbname=tneconni";
        self::$pdo = new PDO($dsn, 'cloud', '111111');

        self::$pdo->exec('set names utf8');
    }
}