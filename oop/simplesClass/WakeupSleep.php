<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 20.11.2017
 * Time: 19:22
 */
class WakeupSleep{
	public $phone1;
	public $phone2;
	public $phone3;

	public $address1;
	public $address2;

	public function __construct() {
		$this->time = $_SERVER['REQUEST_TIME'];
	}

	public function __sleep() {
		return array('time','phone2','phone3','address2');
	}

	public function __wakeup( ) {
		$this->time = $_SERVER['REQUEST_TIME'];
	}
}

$wakeSleep = new WakeupSleep();
$un = serialize($wakeSleep);
//var_dump($un);

$un1 = unserialize($un);
//var_dump($un1);

$arr1 = [
	'a1'=>13,
	'a2'=>'test string',
	'object1' => new WakeupSleep(),
];

$serializeArr1 = serialize($arr1);
var_dump($serializeArr1);

$unserializeArr1 = unserialize($serializeArr1);
var_dump($unserializeArr1);