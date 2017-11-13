<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 13.11.2017
 * Time: 19:44
 */

abstract class AbstractClass{

}
abstract class Car{


	public function go(  ) {
			echo "GO!";
	}

	public function stop(  ) {
		echo "Stop";
	}
}

class Bmw extends Car{

}

$bmw = new Bmw();
$bmw->go();
$bmw->stop();


$abstractObj = new AbstractClass();

abstract class Database{
	public $arr = [];

	abstract protected function connect($server, $username, $password, $database);
	abstract public function query($sql);
	abstract public function fetch();
	abstract public function close();
	public function get(){
		return false;
	}

	final function set(){

	}

}

class MySQL extends Database{
	public function connect( $server, $username, $password, $database ) {
		// TODO: Implement connect() method.
	}
	public function query( $sql ) {
		// TODO: Implement query() method.
	}
	public function fetch() {
		// TODO: Implement fetch() method.
	}
	public function close() {
		// TODO: Implement close() method.
	}
}
class Oracle extends Database{
	public function connect( $server, $username, $password, $database ) {
		// TODO: Implement connect() method.
	}
	public function query( $sql ) {
		// TODO: Implement query() method.
	}
	public function fetch() {
		// TODO: Implement fetch() method.
	}
	public function close() {
		// TODO: Implement close() method.
	}
}
class MonogDb extends Database{
	public function connect( $server, $username, $password, $database ) {
		// TODO: Implement connect() method.
	}
	public function query( $sql ) {
		// TODO: Implement query() method.
	}
	public function fetch() {
		// TODO: Implement fetch() method.
	}
	public function close() {
		// TODO: Implement close() method.
	}
}
class Post{
	public function insert( Database $database ) {
		$database->query('test sql');
	}
}



$mongo = new MonogDb();

$post->insert($mongo);


