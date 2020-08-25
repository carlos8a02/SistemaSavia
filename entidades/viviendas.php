<?php
class Viviendas{
    private $id;
    private $vivienda;
    private $tipos_vivienda;
    private $otras_viviendas;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getVivienda(){
		return $this->vivienda;
	}

	public function setVivienda($vivienda){
		$this->vivienda = $vivienda;
	}

	public function getTipos_vivienda(){
		return $this->tipos_vivienda;
	}

	public function setTipos_vivienda($tipos_vivienda){
		$this->tipos_vivienda = $tipos_vivienda;
	}

	public function getOtras_vivienda(){
		return $this->otras_vivienda;
	}

	public function setOtras_vivienda($otras_vivienda){
		$this->otras_vivienda = $otras_vivienda;
	}
}

?>