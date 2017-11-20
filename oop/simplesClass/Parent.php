<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.11.2017
 * Time: 19:30
 */
class Shape{
	public $name;
	public final function __construct( $name ) {
		echo $name;
	}

	public function __call( $method, $arguments ) {
		return true;
	}
	public function draw($args = null){
		echo "SHAPE DRAW";
	}

	public function __clone(  ) {
		echo "ATTENTION OBJECT IS CLONE!!!";
	}
}
class Circle extends Shape{

}
$shape = new Shape('Name');
$circle = new Circle('Cirle name');


$shape2 = $shape; //Cкопируем ссылку на объект они живут одной жизнью
$shape2->name = "Name";
var_dump($shape);

$shape3 = clone $shape;

$shape3->name = "Shape 3";

var_dump($shape);

var_dump($shape3);
