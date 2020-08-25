<?php
class Independiente{
    private $id;
    private $cuenta_propia;


    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getCuenta_propia(){
		return $this->cuenta_propia;
	}

	public function setCuenta_propia($cuenta_propia){
		$this->cuenta_propia = $cuenta_propia;
	}
}


?>