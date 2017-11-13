<?php
require_once '../../models_data/Office.php';
require_once '../../models/RecordOffices.php';
var_dump($_POST);
//1 шаг Создать модель (объект) Office
$office = new \models_data\Office();
try{
	$office->createDataOffice($_POST);
}catch (Exception $e){
	if ($e->getCode() == 1){
		//отправить телеграм
	}else {
		echo $e->getMessage();
	}
}


//2 шаг создаение объекта для работы с БД
$recordOffice = new RecordOffices();
try{
	$recordOffice->createNewOffice($office);
}catch (Exception $e){
	echo $e->getMessage();
}

