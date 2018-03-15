<?php
class Empleado{
	protected $cargo;
	protected $identificacion;
	protected $nombre;
	protected $salario;

	public function __construct($identificacion,$nombre,$cargo){
		$this->identificacion = $identificacion;
		$this->nombre         = $nombre;
		$this->cargo          = $cargo;
	}
	protected function getCargo(){
		return $this->cargo;
	}
	protected function getIdentificacion(){
		return $this->identificacion;
	}
	protected function getNombre(){
		return $this->nombre;
	}
	protected function getSalario(){
		return $this->salario;
	}
	protected function setCargo($cargo){
		$this->cargo = $cargo;
	}
	protected function setIdentificacion($identificacion){
		$this->identificacion = $identificacion;
	}
	protected function setNombre($nombre){
		$this->nombre = $nombre;
	}
	protected function setSalario($salario){
		$this->salario = $salario;
	}
}
?>