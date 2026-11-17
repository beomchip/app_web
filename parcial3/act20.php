<html>
<head>
    <title>Array</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="asset/bamgeuticonjej.png">
</head>
<body>
    <h2>
        Arreglos
    </h2>
    <?php
        $mes = array("enero","febrero","marzo","abril",
        "mayo","junio","julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
        $mes_num =date("n");
        $mes_num --;
        echo "Hoy es $mes[$mes_num]";
    ?>
    <footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>