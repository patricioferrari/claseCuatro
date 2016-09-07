<?php 

	include_once("claseEstacionamiento.php");

	$patente = $_POST["patente"];
	$accion = $_POST["accion"];

	

	if ($accion == "Estacionar") 
	{
		Estacionamiento:: Guardar($patente);
	}elseif ($accion == "Sacar") 
	{
		Estacionamiento::Sacar($patente);
	}
	else
	{
		$miListado = array();

		$miListado = Estacionamiento::Leer();

		//var_dump($miListado);

	}
	header("location:index.php");
 ?>