<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 13.11.2017
 * Time: 20:14
 */

/**
 * Class GetSet
 * @property $data
 */
class GetSet {
	protected $data = ['person'=>'Jack ','email'=>'jack@gmail.com'];

	public function __get( $name ) {
		if (isset($this->data[$name]))
			return $this->data[$name];
		else{
			return "NOT FOUND!!!";
		}


	}

	public function __set( $name, $value ) {
		$this->data[$name] = $value;
	}


}

$getsetObj = new GetSet();
echo $getsetObj->persons;
$getsetObj->persons = 123;
echo $getsetObj->persons;



