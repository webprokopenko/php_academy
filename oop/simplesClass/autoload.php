<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 20.11.2017
 * Time: 20:16
 */

function __autoload($class_name){
	if (!is_file($class_name))
		throw new Exception('File not found',1);

	require_once ($class_name. ".php");
}



$a = new A();
echo $a->get();
echo "<br>";
$b = new B();
echo $b->get();
echo "<br>";
$c = new C();
echo $c->get();
echo "<br>";
