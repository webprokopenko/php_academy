<?php
namespace oop;
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.11.2017
 * Time: 19:28
 */
class BasicClass{

	public $var1;
	protected $var2;
	private $var3;

	public function method1(){
		$this->var1 = 'Var 1';
	}

	public static function staticMethod($a,$b){
		return $a  + $b;
	}

	protected function method2(){
		$this->var2 = 'Var 2';
		BasicClass::staticMethod(3,1);
	}

	private function method3(){
		$this->var3 = 'Var 3';
	}

	public function methodInit(){
		$this->method1();
		$this->method2();
		$this->method3();
	}
}
class ChildClass extends BasicClass{

		public function childMethod(){
			$this->method2();
			$this->var2 = 'Child class set new value in var2';
			//$this->var3 = 'new var 3';
			//$this->method3();
		}
}
$obj2 = new ChildClass();
$obj2->method1();
$obj2->var1 = '';
$obj2->methodInit();
$obj2::staticMethod(3,1);

echo BasicClass::staticMethod(3,1);

//$obj2->var2 = '';



$obj = new BasicClass();

$obj->method1();
$obj->methodInit();
$obj->var1 = 'New Var 1';

//$obj->method2();
//$obj->method3();

//$obj->var2 = "New Var 2";
//$obj->var3 = "New Var 3";
var_dump($obj);

