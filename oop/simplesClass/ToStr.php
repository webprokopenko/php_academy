<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 13.11.2017
 * Time: 19:32
 */
class Person2{
	public $str = 'test str person2';

	public function testFunc() {
		return false;
	}
}
class Person{
	public $str = 'test str';
	private $email;
	private $name;

	public function __toString() {
		// TODO: Implement __toString() method.
		return "This name is ".$this->name . " And this email ".$this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setName($name){
		$this->name = $name;
	}
}
$person = new Person();
//$person->setEmail("test@gmail.com");
//$person->setName('Test Name');
print $person;

$person2 = new Person2();
print $person2;
