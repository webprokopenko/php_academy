<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 23.11.2017
 * Time: 20:06
 */
class OfficeController{
	public function actionIndex() {
		$officeRecord = new RecordOffices();
		var_dump($officeRecord->getOffices());

	}

	public function actionCreateOffice() {
		require_once '../views/office/CreateOffice.html';
	}

	public function actionInsertOffice( array $office ) {
		try{
			$officeData = new Office($office);
			$officeRecord = new RecordOffices();
			$officeRecord->createNewOffice($officeData);
			echo "New Office Created!!!!";
		}catch (Exception $e){
			echo $e->getMessage();
		}


	}

}