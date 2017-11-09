<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.11.2017
 * Time: 20:04
 */
class Db{
	public static function getConnection(){
		$params = require_once 'config/db_params.php';
		$dsn = "mysql:host={$params['host']}; dbname={$params['dbname']}";
		$db = new PDO($dsn,$params['user'],$params['password']);
		$db->exec("set names utf8");
		return $db;
	}
}