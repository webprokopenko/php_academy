<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 20.11.2017
 * Time: 19:02
 */
class IssetUnset{
	public $var_1 = 5;

	private $private_var_1 = 10;
	private $private_var_2 = 1;

	public function __get( $name ) {
		if (isset($this->$name)){
			return $this->$name;
		}else{
			echo "Свойство $name отсутствует или не определено в данном классе";
		}
	}

	public function __set( $name, $value ) {
		$this->$name = $value;
	}

	public function __isset( $name ) {
		return isset($this->$name);
	}

	public function __unset( $name ) {
		unset($this->$name);
	}
	
}
$issetUnset = new IssetUnset();
//echo $issetUnset->private_var_1;
//echo $issetUnset->private_var_3;

$issetUnset->private_var_1 = 14;
//echo $issetUnset->private_var_1;

var_dump(isset($issetUnset->private_var_2)) ;
unset($issetUnset->private_var_2);
var_dump(isset($issetUnset->private_var_2)) ;


