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
        $dia = array("domingo","lunes","martes","miercoles",
        "jueves","viernes","sábado");
        $dia_numero =date("w");
        echo "Hoy es $dia[$dia_numero]";
    ?>
    <footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>