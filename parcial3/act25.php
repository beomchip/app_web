<html>
<head>
    <title>Date Condicional</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="asset/bamgeuticonjej.png">
</head>
<body>
    <h2>
        Date Condicional
    </h2>
    <?php
        $dia=date("d");
        if ($dia<=10)
        { echo "sitio activo"; }
        else
        { echo "sitio fuera de servicio"; }
    ?>
    <footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>