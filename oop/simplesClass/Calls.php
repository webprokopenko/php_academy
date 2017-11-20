<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.11.2017
 * Time: 19:03
 */
class Address{
	protected $city;
	protected $street;
	protected $bild;
	protected $zip;

	public function setCity($city){
		$this->city = $city;
	}
	public function getCity() {
		return $this->city;
	}
	public function setStreet( $street ) {
		$this->street = $street;
	}
	public function getStreet( ) {
		return $this->street;
	}
}
class Person{
	protected $name;
	protected $address;
	protected $car;


	public function __construct() {
		$this->address = new Address();
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName( ) {
		return $this->name;
	}

	public function __call( $method, $arguments ) {
		if (method_exists($this->address, $method))
		{
			return call_user_func_array([$this->address,$method],$arguments);
		}
		else if (method_exists($this->car,$method)){

		}
			echo "METHOD NOT EXISTS IN ADDRESS";
	}
//	public function setCity( $city ) {
//		$this->address->setCity($city);
//	}
//
//	public function getCity() {
//		return $this->address->getCity();
//	}

}

$person = new Person();
var_dump($person);
$person->setName('Test name');
$person->setCity('Odessa');
var_dump($person);

echo $person->getStreet();
$person->setStreet('Deribasovskaya');
echo $person->getStreet();

var_dump($person);