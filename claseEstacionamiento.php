<?php
	
	 class Estacionamiento 	 	
	 {

	 	function __construct()
	 	{
	 	}

	 	public static function Guardar($patente)
	 	{
	 		$fecha= date("d/m/Y H:i:s");
	 		$renglon = "$patente "."$fecha"."\n";

	 		// "a" puedo leer y escribir y mantiene los datos.
	 		$miArchivo =fopen("estacionados.txt", "a");

	 		fwrite($miArchivo, $renglon);

	 		fclose($miArchivo);
	 	}

	 	
	 } 
 ?>