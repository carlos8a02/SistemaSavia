<?php
class Natalidad{
    private $id;	
    private $mujeres_embarazadas;
    private $numero_mujeres_embarazadas;
    private $mujeres_10_17;	
    private $numero_menores_embarazadas;	
    private $mujeres_18_25;	
    private $numero_jovenes_embarazadas;	
    private $mujeres_26_45;	
    private $numero_adultas_embarazadas;	
    private $parteras;	
    private $numero_parteras;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getMujeres_embarazadas(){
		return $this->mujeres_embarazadas;
	}

	public function setMujeres_embarazadas($mujeres_embarazadas){
		$this->mujeres_embarazadas = $mujeres_embarazadas;
	}

	public function getNumero_mujeres_embarazadas(){
		return $this->numero_mujeres_embarazadas;
	}

	public function setNumero_mujeres_embarazadas($numero_mujeres_embarazadas){
		$this->numero_mujeres_embarazadas = $numero_mujeres_embarazadas;
	}

	public function getMujeres_10_17(){
		return $this->mujeres_10_17;
	}

	public function setMujeres_10_17($mujeres_10_17){
		$this->mujeres_10_17 = $mujeres_10_17;
	}

	public function getNumero_menores_embarazadas(){
		return $this->numero_menores_embarazadas;
	}

	public function setNumero_menores_embarazadas($numero_menores_embarazadas){
		$this->numero_menores_embarazadas = $numero_menores_embarazadas;
	}

	public function getMujeres_18_25(){
		return $this->mujeres_18_25;
	}

	public function setMujeres_18_25($mujeres_18_25){
		$this->mujeres_18_25 = $mujeres_18_25;
	}

	public function getNumero_jovenes_embarazadas(){
		return $this->numero_jovenes_embarazadas;
	}

	public function setNumero_jovenes_embarazadas($numero_jovenes_embarazadas){
		$this->numero_jovenes_embarazadas = $numero_jovenes_embarazadas;
	}

	public function getMujeres_26_45(){
		return $this->mujeres_26_45;
	}

	public function setMujeres_26_45($mujeres_26_45){
		$this->mujeres_26_45 = $mujeres_26_45;
	}

	public function getNumero_adultas_embarazadas(){
		return $this->numero_adultas_embarazadas;
	}

	public function setNumero_adultas_embarazadas($numero_adultas_embarazadas){
		$this->numero_adultas_embarazadas = $numero_adultas_embarazadas;
	}

	public function getParteras(){
		return $this->parteras;
	}

	public function setParteras($parteras){
		$this->parteras = $parteras;
	}

	public function getNumero_parteras(){
		return $this->numero_parteras;
	}

	public function setNumero_parteras($numero_parteras){
		$this->numero_parteras = $numero_parteras;
	}

}
?>