<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 13.11.2017
 * Time: 20:42
 */
class Tweet{
	protected $data= [];

	public function from(string $from){
		$data['from'] = $from;
		return $this;
	}
	public function withStatus(string $status){
		$data['status'] = $status;
		return $this;
	}
	public function send(){
		return true;
	}
}

$tweet = new Tweet();

$id = $tweet
	->from("test@gmail.com")
	->withStatus('PHP 7')
	->send();

var_dump($tweet->from('test@gmail.com'));