<?php

class Distribucion{
	private $id;
    private $estado;
    private $municipios;
    private $parroquias;	
    private $sector;
    private $nombre_comunidad;
    private $nombre_indigena;
    private $grupo;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getMunicipios(){
		return $this->municipios;
	}

	public function setMunicipios($municipios){
		$this->municipios = $municipios;
	}

	public function getParroquias(){
		return $this->parroquias;
	}

	public function setParroquias($parroquias){
		$this->parroquias = $parroquias;
	}

	public function getSector(){
		return $this->sector;
	}

	public function setSector($sector){
		$this->sector = $sector;
	}

	public function getNombre_comunidad(){
		return $this->nombre_comunidad;
	}

	public function setNombre_comunidad($nombre_comunidad){
		$this->nombre_comunidad = $nombre_comunidad;
	}

	public function getNombre_indigena(){
		return $this->nombre_indigena;
	}

	public function setNombre_indigena($nombre_indigena){
		$this->nombre_indigena = $nombre_indigena;
	}

	public function getGrupo(){
		return $this->grupo;
	}

	public function setGrupo($grupo){
		$this->grupo = $grupo;
	}
}
?>