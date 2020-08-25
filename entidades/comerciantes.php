<?php
class Comerciantes{
    private $id;
    private $comercio;
    private $tipos_comercios;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getComercio(){
		return $this->comercio;
	}

	public function setComercio($comercio){
		$this->comercio = $comercio;
	}

	public function getTipos_comercios(){
		return $this->tipos_comercios;
	}

	public function setTipos_comercios($tipos_comercios){
		$this->tipos_comercios = $tipos_comercios;
	}
}
?>