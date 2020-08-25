<?php
class Civil{
    private $id;
    private $unidos;
    private $casados;
    private $solteros;
    private $divorciados;
    private $otros;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUnidos(){
		return $this->unidos;
	}

	public function setUnidos($unidos){
		$this->unidos = $unidos;
	}

	public function getCasados(){
		return $this->casados;
	}

	public function setCasados($casados){
		$this->casados = $casados;
	}

	public function getSolteros(){
		return $this->solteros;
	}

	public function setSolteros($solteros){
		$this->solteros = $solteros;
	}

	public function getDivorciados(){
		return $this->divorciados;
	}

	public function setDivorciados($divorciados){
		$this->divorciados = $divorciados;
	}

	public function getOtros(){
		return $this->otros;
	}

	public function setOtros($otros){
		$this->otros = $otros;
	}
}
?>