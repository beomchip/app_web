<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="asset/bamgeuticonjej.png">
    <title>Arreglos</title>
</head>
<body>
	<?php
	if(isset($_POST['genero']) && isset($_POST['apellido']) &&
	 $_POST['apellido']!="")
	{
		if ($_POST['genero'] == 0)
		{echo "Hola Sr.  ";}
		else    echo "Hola Sra.  "; 
		echo " <b> {$_POST['apellido']}</b>, un gusto saludarte";
	}
	else{
		echo "faltan datos<br>";
		if(isset($_POST['enviar']))
		{
			if(!isset($_POST['genero']))
				echo "<b>Falta genero</b><br>";

			if(!isset($_POST['apellido']) || 
			isset($_POST['apellido'])=="" || isset($_POST['apellido'])==" " )
				echo "<b>Ingresa tu apellido<b><br>";
		}
		else echo "No accediste al form";

	}
?>

	<footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>
