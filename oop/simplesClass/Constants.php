<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.11.2017
 * Time: 20:07
 */

class Match{
	const opl = 1;

	const pi = 3.14159;
	const e = 2.71828;

	public function radius($a,$b){
		return $a + $b + self::pi;
	}

}
class Matches{
	const opl = 1;

	const pi = 3.14159;
	const e = 2.71828;

	public function radius($a,$b){
		return $a + $b + self::pi;
	}

}
class Ext extends Match{
	public $testMeth;

	public function radius( $a, $b ) {
		//parent::pi = $a;

	}

	public static function statfun()
	{
		parent::pi;
		//$this->testMeth;
	}
}

echo Match::e;
echo Match::pi;

$a = new Match();
$b = new Ext();

abstract class Abs{

}

class Exts extends Abs{

}

$c = new Exts();


var_dump($a instanceof Match);
var_dump($b instanceof Match);
var_dump($a instanceof Matches);

var_dump($c instanceof Abs);
