<html>
<head>
    <title>Anagramas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="asset/bamgeuticonjej.png">
</head>
<body>
    <h2>Resultado</h2>
    <?php
        $pal1 = strtoupper($_POST['p1']);
        $pal2 = strtoupper($_POST['p2']);
        $pal1 = str_split($pal1);
        $pal2 = str_split($pal2);
        sort($pal1);
        sort($pal2);
        $pal1 = implode('', $pal1);
        $pal2 = implode('', $pal2);
        if ($pal1 == $pal2)
        {
            echo "{$_POST['p1']} y {$_POST['p2']} son anagramas";
        }
        else
        {
            echo "{$_POST['p1']} y {$_POST['p2']} no son anagramas";
        }
    ?>
    <footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>