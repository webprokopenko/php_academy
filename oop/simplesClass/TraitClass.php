<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 13.11.2017
 * Time: 19:40
 */
trait NameTrait{
	private $name;

	public function getName() {
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}
}
class Book{
	use NameTrait;
}

$book = new Book();
$book->setName('New name');

echo $book->getName();