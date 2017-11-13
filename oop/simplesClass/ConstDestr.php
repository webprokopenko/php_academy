<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 13.11.2017
 * Time: 20:06
 */
class ConstrDestr{
	private function __construct(string $name, string $email) {
		echo "Мы вызвали конструктор при создании объекта автоматически";

	}
	public function __destruct() {
		echo "Мы вызвали деструктор при удалении из памяти автоматически";
	}
}

$obj = new ConstrDestr();
