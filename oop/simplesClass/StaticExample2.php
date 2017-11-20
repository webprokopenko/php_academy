<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 20.11.2017
 * Time: 19:54
 */
class Father{
	public static function money(  ) {
		return __CLASS__. ' money';
	}

	public static function life( ) {
		return static::money();
	}
}
class Son1 extends Father{
	public static function money() {
		return __CLASS__. ' money';
	}
	public static function life() {
		return parent::life();
	}
}
class Son2 extends Father{
	public static function money() {
		return __CLASS__. ' money';
	}
	public static function life() {
		return parent::life();
	}
}



echo "SON2 ". Son2::life();
echo "<br>";
echo "SON1 ". Son1::life();