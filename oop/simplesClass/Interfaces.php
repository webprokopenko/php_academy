<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.11.2017
 * Time: 20:19
 */

interface Myinterface{
	protected function doThis();
	public function doThat();
	public function setName($name) : void ;
	public function getName();
}
class MyClass implements Myinterface{
	protected $name;

	public function doThat(  ) {
		echo "Do That";
	}

	public function doThis(  ) {
		echo "Do This";
	}

	public function setName( $name) {
		$this->name = $name;
	}

	public function getName(  ) {

	}

}
class ChildMyClass extends MyClass{
	 function doThat(){
		parent::doThat();
	}
}
class Child2MyClass extends ChildMyClass{
	public function doThat(){
		return false;
	}
}
class SetIntro{
	public function __construct( Myinterface $myinterface ) {
		$myinterface->doThis();
	}
}

$objInt = new MyClass();

var_dump($objInt instanceof Myinterface);

$setintro = new SetIntro($objInt);
