<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 13.11.2017
 * Time: 19:25
 */
final class FinalClass{

}

class simpleClass extends FinalClass{

}

$finalObject = new FinalClass();

class simpleClass1{
	final public function finalMethod() : bool
	{
		return true;
	}
	private function notFinalMethod() : bool{
		return false;
	}

}

class simpleClass2 extends simpleClass1{
	public function finalMethod(){

	}
	public function notFinalMethod(): bool {
		parent::finalMethod();
	}
}
$simpleObject2 = new simpleClass2();
$simpleObject2->notFinalMethod();