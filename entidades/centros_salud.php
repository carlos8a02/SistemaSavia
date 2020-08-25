<?php
class Centros{
    private $id;
    private $centro_salud;
    private $estatus;
    private $ambulancias;
    private $patologias;


    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getCentro_salud(){
		return $this->centro_salud;
	}

	public function setCentro_salud($centro_salud){
		$this->centro_salud = $centro_salud;
	}

	public function getEstatus(){
		return $this->estatus;
	}

	public function setEstatus($estatus){
		$this->estatus = $estatus;
	}

	public function getAmbulancias(){
		return $this->ambulancias;
	}

	public function setAmbulancias($ambulancias){
		$this->ambulancias = $ambulancias;
	}

	public function getPatologias(){
		return $this->patologias;
	}

	public function setPatologias($patologias){
		$this->patologias = $patologias;
	}

}
?>