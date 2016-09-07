<?php 

	include_once("claseEstacionamiento.php");

	$patente = $_POST["patente"];
	$accion = $_POST["accion"];

	//header("location:index.php");

	if ($accion == "Estacionar") 
	{
		Estacionamiento:: Guardar($patente);
	}else
	{
		Estacionamiento:: Leer();
	}

 ?>