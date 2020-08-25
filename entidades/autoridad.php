<?php
 
class AutoridadLegitima{
	private $id;
	private $nombre_vocero;
	private $nombre_autoridad_legitima;
	private $cargo_autoridad_legitima;
	private $numero_de_telefono;


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre_vocero(){
		return $this->nombre_vocero;
	}

	public function setNombre_vocero($nombre_vocero){
		$this->nombre_vocero = $nombre_vocero;
	}

	public function getNombre_autoridad_legitima(){
		return $this->nombre_autoridad_legitima;
	}

	public function setNombre_autoridad_legitima($nombre_autoridad_legitima){
		$this->nombre_autoridad_legitima = $nombre_autoridad_legitima;
	}

	public function getCargo_autoridad_legitima(){
		return $this->cargo_autoridad_legitima;
	}

	public function setCargo_autoridad_legitima($cargo_autoridad_legitima){
		$this->cargo_autoridad_legitima = $cargo_autoridad_legitima;
	}

	public function getNumero_de_telefono(){
		return $this->numero_de_telefono;
	}

	public function setNumero_de_telefono($numero_de_telefono){
		$this->numero_de_telefono = $numero_de_telefono;
	}

}



?>