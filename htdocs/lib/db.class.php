<?php
/**
 * Created by JetBrains PhpStorm.
 * User: krom
 * Date: 14.06.12
 * Time: 19:10
 * To change this template use File | Settings | File Templates.
 */
class db
{
    private static $instance = NULL;
    function __construct() {
        mysql_connect('ohm-db.local', 'dev', 'sl_dev');
        mysql_select_db('dev');
        mysql_query('USE NAMES UTF8');
}

    public static function getConnection() {
        if (self::$instance == NULL) {
         self::$instance = new db();
        }
        return self::$instance;
    }

    public function query($sQuery) {
        return mysql_query($sQuery);
    }
}
