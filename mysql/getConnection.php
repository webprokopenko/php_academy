<?php
//Получение параметов для подключения к БД
$config = require_once (__DIR__.'/config/db_params.php');

try{
//Установить соединение с БД
	$dsn = "mysql:host={$config['slave1']};dbname={$config['dbname']}";
	$db = new PDO($dsn,$config['user'],$config['password']);

	//Задаем кодировку
	$db->exec('set names utf8');
}catch (Exception $e){
	die('Не удалось подключиться '.$e->getMessage());
}
$sql3 = "SELECT * FROM table2";
//Пример запроса
$city = 'San Francisco';
$sql = 'SELECT * FROM offices WHERE city = :city';
$result = $db->prepare($sql);
$result->bindParam(':city',$city,PDO::PARAM_STR);
$result->setFetchMode(PDO::FETCH_ASSOC);
//Выполняем запрос
$result->execute();
$offices = $result->fetch();

$city = 'Odesa';
$phone = '+38096113322';
$address = '1550 Court Place';
$state = 'CA';
$country = 'Ukraine';
$postal_code = '84080';
$territory = 'EMEA';

try{
	$db->beginTransaction();
	$sql_insert_office = "INSERT INTO offices (city,phone,address,state,country,postal_code,territory) ";
	$sql_insert_office.=" VALUES(:city,:phone,:address,:state,:country,:postal_code,:territory)";
	$result1 = $db->prepare($sql_insert_office);
	$result1->bindParam(':city',$city,PDO::PARAM_STR);
	$result1->bindParam(':phone',$phone,PDO::PARAM_STR);
	$result1->bindParam(':address',$address,PDO::PARAM_STR);
	$result1->bindParam(':state',$state,PDO::PARAM_STR);
	$result1->bindParam(':country',$country,PDO::PARAM_STR);
	$result1->bindParam(':postal_code',$postal_code,PDO::PARAM_STR);
	$result1->bindParam(':territory',$territory,PDO::PARAM_STR);
	$result1->execute();

	$db->commit();
}catch (Exception $e){
	$db->rollBack();
	echo "Error! : ". $e->getMessage();
}

function test_func(){
	if(true){
		return new http\Exception\BadMessageException('');
	}
}

try{
	test_func();
}catch (Exception $e){
	echo $e->getMessage();
}
