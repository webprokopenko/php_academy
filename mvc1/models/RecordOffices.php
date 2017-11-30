<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 23.11.2017
 * Time: 20:03
 */

class RecordOffices{
	private $db;

	public function __construct() {
		$this->getConnection();
	}

	private function getConnection(){
		$this->db =MySQL::getConnection();
		$this->db =MySQL::getConnection();
		$this->db =MySQL::getConnection();
		$this->db =MySQL::getConnection();
		$this->db =MySQL::getConnection();
		$this->db =MySQL::getConnection();
		$this->db =MySQL::getConnection();

	}
	public function createNewOffice(Office $office){

		$sql_insert_office = "INSERT INTO offices (city,phone,address,state,country,postal_code,territory) ";
		$sql_insert_office.=" VALUES(:city,:phone,:address,:state,:country,:postal_code,:territory)";
		$result1 = $this->db->prepare($sql_insert_office);
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

	public function getOffice( int $id ) : array {

		$sql_select_office_id = "SELECT * FROM offices WHERE id = :id";
		$result = $this->db->prepare($sql_select_office_id);
		$result->bindParam(':id',$id);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}

	public function getOffices() {
		$sql_select_offices = "SELECT * FROM offices";
		$result = $this->db->prepare($sql_select_offices);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();

		return $result->fetchAll();
	}

	public function updateOffice( array $office ) {

	}
}

