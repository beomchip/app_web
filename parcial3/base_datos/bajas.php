<html>
<head>
	<title>BAJA DE CLIENTES</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="../asset/bamgeuticonjej.png">
</head>
<body>
<h1>Favor de llenar datos</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
method="post">
RFC:		<input type="text" name="rfc">  <br>
<input type="submit" name="enviar">
</form>

<?php
include("config.php");
if(isset($_POST['rfc'])) 
{		
	echo "{$_POST['rfc']}<br>";
	
	$conexion = mysqli_connect($server,$db_user,$db_pass) or  die("Problemas en la conexion");
	if($conexion)
	{	
		mysqli_select_db($conexion,$database) 
		or  die("Problemas en la selecciÃ³n de la base de datos");		
		$query= "DELETE FROM clientes WHERE rfc = '$_POST[rfc]';";
		echo "La consulta generada es:<br>" .$query;
		if(mysqli_query($conexion,$query)) echo "<br> dato eliminado<br>";
		mysqli_close($conexion);
	}
 }
 else{
      	if(isset($_POST['enviar'])){	 
       		if(isset($_POST['rfc'])==false || $_POST['rfc']=="")
				echo "Falta definir RFC<br>";	       	
       	}
}
?>

	<footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>
