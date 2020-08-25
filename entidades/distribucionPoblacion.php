<?php
class DistribucionPoblacion{
    private $id;
    private $total_habitantes_indigenas;
    private $actas_nacimiento;
    private $numero_actas;
    private $cedulas_indentidad;
    private $numero_cedulas;
    private $numero_femeninos;
    private $numero_masculinos;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getTotal_habitantes_indigenas(){
		return $this->total_habitantes_indigenas;
	}

	public function setTotal_habitantes_indigenas($total_habitantes_indigenas){
		$this->total_habitantes_indigenas = $total_habitantes_indigenas;
	}

	public function getActas_nacimiento(){
		return $this->actas_nacimiento;
	}

	public function setActas_nacimiento($actas_nacimiento){
		$this->actas_nacimiento = $actas_nacimiento;
	}

	public function getNumero_actas(){
		return $this->numero_actas;
	}

	public function setNumero_actas($numero_actas){
		$this->numero_actas = $numero_actas;
	}

	public function getCedulas_indentidad(){
		return $this->cedulas_indentidad;
	}

	public function setCedulas_indentidad($cedulas_indentidad){
		$this->cedulas_indentidad = $cedulas_indentidad;
	}

	public function getNumero_cedulas(){
		return $this->numero_cedulas;
	}

	public function setNumero_cedulas($numero_cedulas){
		$this->numero_cedulas = $numero_cedulas;
	}

	public function getNumero_femeninos(){
		return $this->numero_femeninos;
	}

	public function setNumero_femeninos($numero_femeninos){
		$this->numero_femeninos = $numero_femeninos;
	}

	public function getNumero_masculinos(){
		return $this->numero_masculinos;
	}

	public function setNumero_masculinos($numero_masculinos){
		$this->numero_masculinos = $numero_masculinos;
	}

}
?>