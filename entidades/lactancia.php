<?php
class Lantando{
    private $id;
    private $lactantes;
    private $total_lactante;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getLactantes(){
		return $this->lactantes;
	}

	public function setLactantes($lactantes){
		$this->lactantes = $lactantes;
	}

	public function getTotal_lactante(){
		return $this->total_lactante;
	}

	public function setTotal_lactante($total_lactante){
		$this->total_lactante = $total_lactante;
	}
}

?>