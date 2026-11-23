<html>
<head>
    <title>Saludo</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="asset/bamgeuticonjej.png">
</head>
<body>
    <?php
        if ($_POST['genero'] == 0)
        {echo "Hola JOvenciTA ";
        }
        else
        {
        echo "Hola JOvenciTO ";
        }
        echo " <b> {$_POST['apellido']}</b>, un gusto saludarte";
    ?>
</body> 
</html>