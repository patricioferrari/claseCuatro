<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
</head>
<body style= "background: <?php echo $_GET["color"]; ?>">

	<div class ="CajaInicio animated flash ">
	<form id="formIngreso" method="post" action="nexo.php">
		<input type= "text" name="patente">
		<input type="submit" class="MiBotonUTNMenuInicio" name=	"accion" value ="Estacionar">
		<input type="submit" class="MiBotonUTNMenuInicio" name=	"accion" value ="Salir">
	</form>
	</div>
</body>
</html>