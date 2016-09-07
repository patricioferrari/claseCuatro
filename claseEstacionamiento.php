<?php
	
	 class Estacionamiento 	 	
	 {

	 	function __construct()
	 	{
	 	}

	 	public static function Guardar($patente)
	 	{
	 		$fecha= date("d/m/Y H:i:s");
	 		$renglon = $patente ."=>".$fecha."\n";

	 		// "a" puedo leer y escribir y mantiene los datos.
	 		$miArchivo =fopen("estacionados.txt", "a");

	 		fwrite($miArchivo, $renglon);

	 		fclose($miArchivo);
	 	}

	 	public static function Leer()
	 	{
	 		$listadoAutos = array();

	 		$miArchivo =fopen("estacionados.txt", "r");
	 		//leo renglon por renglon
	 		while (!feof($miArchivo))
	 		{
	 			$renglon = fgets($miArchivo);
	 			$auto = explode("=>", $renglon);
	 			if($auto[0] != " ")
	 			{
	 				$listadoAutos[] = $auto;	
	 			}
	 		}
	 		fclose($miArchivo);
	 		return $listadoAutos;

	 	}

	 	public static function Sacar($patente)
	 	{
	 		$listadoEstacionado = Estacionamiento::Leer();

	 		foreach ($listadoEstacionado as $auto)
	 		{
	 			if ($auto[0] == $patente) 
	 			{
	 				$inicio = $auto[1];
	 				$ahora = date("d/m/Y H:i:s");

	 				$diferencia = strtotime($ahora) - strtotime($inicio);

	 				$importe = $diferencia * 10;
		 			// Se guarda en ticket.txt.

		 			echo $importe;
	 			}
	 		}
	 	}

	 	
	 } 
 ?>