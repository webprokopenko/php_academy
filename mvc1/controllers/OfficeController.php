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
		$offices = $officeRecord->getOffices();
		$test='test';
		include ($_SERVER['DOCUMENT_ROOT'].'/../views/office/ListOffices.php');
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

	public function actionUpdateOffice($id) {
		try{
			$officeRecord = new RecordOffices();
			$office = $officeRecord->getOffice($id);

			include_once ('../views/office/UpdateOfficeForm.php');

		}catch(Exception $e){
			echo $e->getMessage();
		}
	}

	public function actionSingletone(){
		$singletone = Singletone::createInstance();
		$singletone->iterate = 1;
		echo $singletone->iterate;
		var_dump($singletone);



		$signetone2 = Singletone::createInstance();
		echo $signetone2->iterate;

		$signetone2->import();

		var_dump($signetone2);
	}

}