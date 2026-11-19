<html>
<head>
    <title>IVA</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="asset/bamgeuticonjej.png">
</head>
<body>
    <h2>
        IVA
    </h2>
    <?php
        $original=200;
        $iva=.16;
        $final=$original+($original*$iva);
        echo "Precio inicial: $original";
        echo "</br>El precio final es de $final";
    ?>
    <footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>