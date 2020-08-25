<?php
class Discapacitados{
    private $id;
    private $discapacidad;
    private $cantidad_discapacidad;
    private $discapacidad_femeninas;
    private $discapacidad_masculinos;
    private $tipo_discapacidad;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDiscapacidad(){
		return $this->discapacidad;
	}

	public function setDiscapacidad($discapacidad){
		$this->discapacidad = $discapacidad;
	}

	public function getCantidad_discapacidad(){
		return $this->cantidad_discapacidad;
	}

	public function setCantidad_discapacidad($cantidad_discapacidad){
		$this->cantidad_discapacidad = $cantidad_discapacidad;
	}

	public function getDiscapacidad_femeninas(){
		return $this->discapacidad_femeninas;
	}

	public function setDiscapacidad_femeninas($discapacidad_femeninas){
		$this->discapacidad_femeninas = $discapacidad_femeninas;
	}

	public function getDiscapacidad_masculinos(){
		return $this->discapacidad_masculinos;
	}

	public function setDiscapacidad_masculinos($discapacidad_masculinos){
		$this->discapacidad_masculinos = $discapacidad_masculinos;
	}

	public function getTipo_discapacidad(){
		return $this->tipo_discapacidad;
	}

	public function setTipo_discapacidad($tipo_discapacidad){
		$this->tipo_discapacidad = $tipo_discapacidad;
	}

    }



?>