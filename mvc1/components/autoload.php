<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 20.11.2017
 * Time: 20:44
 */

function __autoload($className)
{
	//Массив папок, в которых могут находиться необходимые классы
	$array_path = [
		"models",
		'components',
		'controllers'
	];

	//Проходим по массиву папок
	foreach ($array_path as $path ){
		//Формируем имя и путь к файлу с классом
		$path = "..".DIRECTORY_SEPARATOR. $path .DIRECTORY_SEPARATOR .$className . '.php';

		if (is_file($path))
			require_once $path;
	}
}