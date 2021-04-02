<html>

<body>
    <?php
    #Joel Rojas Espinoza
    echo "ACT 4 - Ecuacion de segundo grado<br><br>";

    $variable1 = 6;
    $variable2 = -5;
    $variable3 = 1;
    $resultado1 = (-$variable2 + sqrt($variable2 * $variable2 - 4 * $variable1 * $variable3)) / (2 * $variable1);
    $resultado2 = (-$variable2 - sqrt($variable2 * $variable2 - 4 * $variable1 * $variable3)) / (2 * $variable1);

    echo "<h1>" . $variable1 . "x^2" . $variable2 . "x" . $variable3 . "=0</h1><br>";
    echo "<h1>Resultado 1: " . $resultado1 . "</h1><br>";
    echo "<h1>Resultado 2: " . $resultado2 . "</h1>";
    ?>
</body>

</html>