<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 27.11.2017
 * Time: 19:07
 */
class Router{
	public $controllerName;
	public $segments;
	public $controller;

	public function __construct() {
		$this->urlCreate();
		$this->createController();
		$this->createAction();
	}
	public function urlCreate() {
		$url = $_SERVER['REQUEST_URI'];
		$url = strtolower($url); //Все в нижний регистр
		$url = trim($url,'/'); //Удаляем / из конца и начала
		$this->segments = explode('/',$url); //Формируем массив
		$this->controllerName = ucfirst($this->segments[0]);//Первая буква к большому регистру
		$this->controllerName.='Controller';
	}

	public function createController() {
		$this->controller = new $this->controllerName;
	}

	public function createAction() {
		if ((!empty($this->segments[1]) && empty($this->segments[2])))
		{
			$actionString = 'action'.ucfirst($this->segments[1]);

			if (method_exists($this->controller,$actionString)){
				if (!empty($_POST))
					$result = call_user_func_array([$this->controllerName,$actionString],[$_POST]);
				else{
					$result=call_user_func([$this->controllerName,$actionString]);
				}
			}
		}elseif(!empty($this->segments[2])){
			$actionString = 'action'.ucfirst($this->segments[1]);
			if (method_exists($this->controller,$actionString)){
				$result = call_user_func_array([$this->controller,$actionString],[$this->segments[2]]);
			}
		}
		else{
			$this->controller->actionIndex();
		}
	}
}