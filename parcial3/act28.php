<html>
<head>
    <title>Arrays Bidimensionales</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estiloTd.css">
    <link rel="icon" type="image/x-icon" href="asset/bamgeuticonjej.png">
</head>
<body>
    <h2>
        Arrays Bidimensionales
    </h2>
    <?php
        $cars = array (
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
        );

        $info = array(
            "", ": In Stock: ", ", sold: "
        );
        
        for ($i = 0; $i < 4; $i++) {
            for($j = 0; $j < 3; $j++){
                echo $info[$j] . $cars[$i][$j];
            }
            echo "</br>";
        }
    ?>
    <footer>
        </br>
        Sofía de Jesús Muñoz Morales - 188168
    </footer>
</body>
</html>