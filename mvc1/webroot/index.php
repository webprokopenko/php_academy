<?php
define('ROOT',dirname(__FILE__));
require_once "../components/autoload.php";

$url = $_SERVER['REQUEST_URI'];
$url = strtolower($url); //Все в нижний регистр
$url = trim($url,'/'); //Удаляем / из конца и начала
$segments = explode('/',$url); //Формируем массив
$contollerName = ucfirst($segments[0]);//Первая буква к большому регистру
$contollerName.='Controller';

//require_once '../controllers/'.$contollerName.'.php';

$contoller = new $contollerName;
if (!empty($segments[1]))
{
	$actionString = 'action'.ucfirst($segments[1]);

	if (method_exists($contoller,$actionString)){
		if (!empty($_POST))
			$result = call_user_func_array([$contollerName,$actionString],[$_POST]);
		else{
			$result=call_user_func([$contollerName,$actionString]);
		}
	}
}else{
	$contoller->actionIndex();
}




