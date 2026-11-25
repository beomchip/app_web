<html>
<head><title>CONSULTAS DE CLIENTES</title>
</head>
<body>
<h1>Consultas</h1>
<?php
include("config.php");	
$conexion = mysqli_connect("localhost","root","") or  die("Problemas en la conexion");
if($conexion)
{	mysqli_select_db($conexion,"efacturas") or  die("Problemas en base de datos");
	$query= "SELECT nombre, correo_e, rfc FROM clientes;";
	$registros=mysqli_query($conexion,$query) or die("Problemas en la query ".mysqli_error());
	echo "<table border='1'><tr><th>RFC</th><th>NOMBRE</th><th>EMAIL</th></tr>";
	while($tupla=mysqli_fetch_array($registros))
	{
		echo "<tr><td>".$tupla['rfc']."</td>";
		echo "<td>".$tupla['nombre']."</td>";
		echo "<td>".$tupla['correo_e']."</td></tr>";
	}
	echo "</table>";
	mysqli_close($conexion);
}
?>

</body>
</html>
