<?php
	include "Empleado.php";
	include "Contratista.php";
	include "Planta.php";

	$objPlanta;
	$objContratista;

	if(isset($_POST["contratista"])) {
		$idEmpleado = $_POST["id"];
		$nombre     = $_POST["nombre"];
		$cargo      = $_POST["cargo"];
		$valorHoras = $_POST["valor_hora"];
		$totalHoras = $_POST["total_horas"];

		$objContratista = new Contratista($idEmpleado,$nombre,$cargo);
		$objContratista->setvalorHora($valorHoras);
		$objContratista->setTotalHoras($totalHoras);
		$objContratista->calcularSalario($valorHoras,$totalHoras);

		echo "<br><br> CONTRATISTA <br><br>";
		echo "<br>Id Empleado: ".$objContratista->getIdentificacion();
		echo "<br>Nombre: ".$objContratista->getNombre();
		echo "<br>Cargo: ".$objContratista->getCargo();
		echo "<br><br> RESULTADOS <br>";
		echo $objContratista->getSalario();
	}

	if(isset($_POST["planta"])) {
		$idEmpleado = $_POST["id"];
		$nombre     = $_POST["nombre"];
		$cargo      = $_POST["cargo"];
		$salarioBasico = $_POST["salario_basico"];
		$extras        = $_POST["extras"];
		$deducciones   = $_POST["deducciones"];

		$objPlanta = new Planta($idEmpleado,$nombre,$cargo);
		$objPlanta->setSueldoBasico($salarioBasico);
		$objPlanta->setValorExtras($extras);
		$objPlanta->setDeducciones($deducciones);
		$objPlanta->calcularSalario();

		echo "<br><br> PLANTA <br><br>";

		echo "<br>Id Empleado: ".$objPlanta->getIdentificacion();
		echo "<br>Nombre: ".$objPlanta->getNombre();
		echo "<br>Cargo: ".$objPlanta->getCargo();
		echo "<br><br> RESULTADOS <br>";
		echo $objPlanta->getSalario();
	}
?>

