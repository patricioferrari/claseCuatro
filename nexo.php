<?php 

	include_once("claseEstacionamiento.php");

	$patente = $_POST["patente"];
	$accion = $_POST["accion"];

	echo "$patente";
	echo "<br>";
	echo "$accion";

	
	//header("location:index.php");

	if ($accion == "Estacionar") 
	{
		Estacionamiento:: Guardar($patente);
	}

 ?>