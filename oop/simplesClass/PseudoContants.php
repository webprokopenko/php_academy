<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 20.11.2017
 * Time: 19:47
 */
class PseudoContants{
	public function stat(){
		echo "LINE: ".__LINE__. "<br>";
		echo __FILE__ . "<br>";
		echo __FUNCTION__. "<br>";
		echo __METHOD__."<br>";
		echo __CLASS__."<br>";
	}
}
$obj = new PseudoContants();
$obj->stat();