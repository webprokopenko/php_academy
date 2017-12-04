<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 04.12.2017
 * Time: 19:40
 */
class Config{
	protected static $settings = [];
	public static function get($key){
		return isset(self::$settings[$key]) ? self::$settings[$key] : null;
	}
	public static function set($key, $value)
	{
		self::$settings[$key] = $value;
	}
}