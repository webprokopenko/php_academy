<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 30.11.2017
 * Time: 19:26
 */
class Singletone{

	private static $_instance = null;

	private function __construct() {
	}
	private function __clone(){
	}
	static public function createInstance(){
		if(is_null(self::$_instance))
			self::$_instance = new self();

		return self::$_instance;

	}
}