<?php
namespace models_data;
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.11.2017
 * Time: 20:27
 */
class Office{
	public $id;
	public $city;
	public $phone;
	public $address;
	public $state;
	public $country;
	public $postal_code;
	public $territory;
	public $arr = [];

	public function __construct( array $office) {
		$this->createDataOffice($office);
	}

	public function __get( $name ) {
		if (isset($this->arr[$name]))
			return $this->arr[$name];
		else{
			return "Fields not found";
		}
	}

	public function createDataOffice(array $office){
		 if (!$this->validate($office))
		    throw new \Exception('Office not validate',1);

		 	$this->city = $office['city'];
		 	$this->phone = $office['phone'];
		 	$this->address = $office['address'];
		 	$this->state = $office['state'];
		 	$this->country = $office['country'];
		 	$this->postal_code = $office['postal_code'];
		 	$this->territory = $office['territory'];
	}

	private function validate(array $office) : bool
	{
		//Валидация
		if(true){
			return true;
		}
	}
}