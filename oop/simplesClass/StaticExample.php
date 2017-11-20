<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 20.11.2017
 * Time: 19:51
 */
class StaticExample{
	const CONST1 = 1;
	static public $testStaticVariable = 3;

	public static function testStatic(){
		self::CONST1;
		self::$testStaticVariable;
	}
}

StaticExample::$testStaticVariable  =10;
StaticExample::testStatic();