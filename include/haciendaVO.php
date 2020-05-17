<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class haciendaVO {
	
	//ATRIBUTOS
	
	private $haciendaId;
	private $zoneId;
	private $ownerId;
	private $adminId;
	private $name;
	private $location;
	private $number;
	private $creationDate;
	
	//METODOS
	
	//SET
	public function setHaciendaId($valor) {
		$this->haciendaId = $valor;
	}
	public function setZoneId($valor) {
		$this->zoneId = $valor;
	}
	public function setOwnerId($valor) {
		$this->ownerId = $valor;
	}
	public function setAdminId($valor) {
		$this->adminId = $valor;
	}
	public function setName($valor) {
		$this->name = $valor;
	}
	public function setLocation($valor) {
		$this->location = $valor;
	}
	public function setNumber($valor) {
		$this->number = $valor;
	}
	public function setCreationDate($valor) {
		$this->creationDate = $valor;
	}
	
	public function setAll($haciendaId, $zoneId, $ownerId, $adminId, $name, $location, $number, $creationDate) {
		$this->haciendaId = $haciendaId;
		$this->zoneId = $zoneId;
		$this->ownerId = $ownerId;
		$this->adminId = $adminId;
		$this->name = $name;
		$this->location = $location;
		$this->number = $number;
		$this->creationDate = $creationDate;
	}
	
	//GET - Recuperar
	
	public function getHaciendaId() {
		return $this->haciendaId;
	} 
	
	public function getZoneId() {
		return $this->zoneId;
	} 
	
	public function getOwnerId() {
		return $this->ownerId;
	} 

	public function getAdminId() {
		return $this->adminId;
	} 

	public function getName() {
		return $this->name;
	} 
	
	public function getLocation() {
		return $this->location;
	} 
	
	public function getNumber() {
		return $this->number;
	} 
	
	public function getCreationDate() {
		return $this->creationDate;
	} 
	
}


//$variable = new cultivosVO();
//$variable->setImagen("4.png");
//echo "HOLA" . $variable;
//print_r($variable->setAll());

?>