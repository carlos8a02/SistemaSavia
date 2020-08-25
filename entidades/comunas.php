<?php
class Comunales{

	private	$base_misiones;
	private	$inf1;
	private	$consejo_comunal;
	private	$inf2;
	private	$tipo_de_consejo_comunal;
	private	$pertenece_a_una_comunidad;
	private	$comite_indigena;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getBase_misiones(){
		return $this->base_misiones;
	}

	public function setBase_misiones($base_misiones){
		$this->base_misiones = $base_misiones;
	}

	public function getInf1(){
		return $this->inf1;
	}

	public function setInf1($inf1){
		$this->inf1 = $inf1;
	}

	public function getConsejo_comunal(){
		return $this->consejo_comunal;
	}

	public function setConsejo_comunal($consejo_comunal){
		$this->consejo_comunal = $consejo_comunal;
	}

	public function getInf2(){
		return $this->inf2;
	}

	public function setInf2($inf2){
		$this->inf2 = $inf2;
	}

	public function getTipo_de_consejo_comunal(){
		return $this->tipo_de_consejo_comunal;
	}

	public function setTipo_de_consejo_comunal($tipo_de_consejo_comunal){
		$this->tipo_de_consejo_comunal = $tipo_de_consejo_comunal;
	}

	public function getPertenece_a_una_comunidad(){
		return $this->pertenece_a_una_comunidad;
	}

	public function setPertenece_a_una_comunidad($pertenece_a_una_comunidad){
		$this->pertenece_a_una_comunidad = $pertenece_a_una_comunidad;
	}

	public function getComite_indigena(){
		return $this->comite_indigena;
	}

	public function setComite_indigena($comite_indigena){
		$this->comite_indigena = $comite_indigena;
	}

}
?>