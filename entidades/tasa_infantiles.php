<?php
class Infantil{
    private $id;
    private $infantes_femeninos;
    private $infantes_masculinos;
    private $nacidos;


    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getInfantes_femeninos(){
		return $this->infantes_femeninos;
	}

	public function setInfantes_femeninos($infantes_femeninos){
		$this->infantes_femeninos = $infantes_femeninos;
	}

	public function getInfantes_masculinos(){
		return $this->infantes_masculinos;
	}

	public function setInfantes_masculinos($infantes_masculinos){
		$this->infantes_masculinos = $infantes_masculinos;
	}

	public function getNacidos(){
		return $this->nacidos;
	}

	public function setNacidos($nacidos){
		$this->nacidos = $nacidos;
	}
}



?>