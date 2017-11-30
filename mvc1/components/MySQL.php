<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 30.11.2017
 * Time: 19:51
 */
class MySQL{
	private static $_instance = null;
	private static $db = null;
	private function __construct() {
	}
	private function __clone(){
	}

	public static function getConnection(){
		if(is_null(self::$db))
		{
			$params = require_once '../config/db_params.php';
			$dsn = "mysql:host={$params['host']}; dbname={$params['dbname']}";
			self::$db = new PDO($dsn,$params['user'],$params['password']);
			self::$db->exec("set names utf8");
		}


		return self::$db;
	}

}