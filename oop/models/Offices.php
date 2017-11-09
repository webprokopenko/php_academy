<?php
require_once '../Db.php';
require_once '../models_data/Office.php';
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.11.2017
 * Time: 20:10
 */
use models_data\Office;

class Offices{
	public function createNewOffice(Office $office){
		$db = Db::getConnection();

		$sql_insert_office = "INSERT INTO offices (city,phone,address,state,country,postal_code,territory) ";
		$sql_insert_office.=" VALUES(:city,:phone,:address,:state,:country,:postal_code,:territory)";
		$result1 = $db->prepare($sql_insert_office);
		$result1->bindParam(':city',$office->city,PDO::PARAM_STR);
		$result1->bindParam(':phone',$office->phone,PDO::PARAM_STR);
		$result1->bindParam(':address',$office->address,PDO::PARAM_STR);
		$result1->bindParam(':state',$office->state,PDO::PARAM_STR);
		$result1->bindParam(':country',$office->country,PDO::PARAM_STR);
		$result1->bindParam(':postal_code',$office->postal_code,PDO::PARAM_STR);
		$result1->bindParam(':territory',$office->territory,PDO::PARAM_STR);
		$result1->execute();

	}
	public function updateOfficeFromId(Office $office){

	}

	public function getOffice( int $id ) : Office {
		$db  =Db::getConnection();
		$sql_select_office_id = "SELECT * FROM offices WHERE id = :id";
		$result = $db->prepare($sql_select_office_id);
		$result->bindParam(':id',$id);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		$office = new Office();
		return  $office->createDataOffice($result->fetch());
	}
}


$office1 = new Offices();
$dataOffice = new Office();
$dataOffice->createDataOffice($_POST);

try{
	$office1->createNewOffice($dataOffice);
}catch (Exception $e){
	echo $e->getMessage();
}


