<html>
<head>
	<title>MODIFICACIONES DE CLIENTES</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="../asset/bamgeuticonjej.png">
</head>
<body>
<h1>MODIFICACIONES</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
RFC:		
<?php
include("config.php");
	
$conexion = mysqli_connect($server,$db_user,$db_pass) or  die("Problemas en la conexion");
if($conexion)
{	
	mysqli_select_db($conexion,$database) or  die("ERROR bd");
	$query= "SELECT nombre, correo_e, rfc FROM clientes;";
	$registros=mysqli_query($conexion,$query) or die("Problemas en la query ".mysqli_error());
	echo "<select name='rfc'>";
	while($tupla=mysqli_fetch_array($registros))
	{
		echo "<option value=".$tupla['rfc'].">".$tupla['rfc']."</option>";
	}	
	mysqli_close($conexion);
}
echo "</select>";

if(isset($_POST['enviar'])){	 
	$query = "UPDATE clientes SET ";
	$campo = false;

	if(isset($_POST['nombre']) && $_POST['nombre'] != ""){
		$query .= "nombre = '" . $_POST['nombre'] . "'";
		$campo = true;
	}
	if(isset($_POST['correo']) && $_POST['correo'] != ""){
		if($campo){
			$query .= ", ";
		}
		$query .= "correo_e = '" . $_POST['correo'] . "'";
		$campo = true;
	}

	if($campo && isset($_POST['rfc'])){
		$query .= " WHERE rfc = '" . $_POST['rfc'] . "';";
		echo $query;

		$conexion = mysqli_connect($server,$db_user,$db_pass) or die("Problemas en la conexion");
		if($conexion){
			mysqli_select_db($conexion,$database) or die("Error en base de datos");
			if(mysqli_query($conexion,$query)){
				echo "<br> dato modificado<br>";
			} else {
				echo "<br> Error al modificar: " . mysqli_error($conexion) . "<br>";
			}
			mysqli_close($conexion);
		}
	}
}
?>
<br><br><br>
Nombre:		<input type="text" name="nombre">  <br>
Mail	:	<input type="text" name="correo">  <br>
<input type="submit" name="enviar">
</form>
	<footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>
