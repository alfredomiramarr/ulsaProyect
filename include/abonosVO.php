<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class abonosVO {
	
	//ATRIBUTOS
	
	private $id;
	private $nombre;
	private $descrip;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setNombre($valor) {
		$this->nombre = $valor;
	}
	public function setDescrip($valor) {
		$this->descrip = $valor;
	}

	
	public function setAll($id, $name, $descrip) {
		$this->id = $id;
		$this->nombre = $name;
		$this->descrip = $descrip;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getNombre() {
		return $this->nombre;
	} 
	
	public function getDescrip() {
		return $this->descrip;
	} 
	
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>