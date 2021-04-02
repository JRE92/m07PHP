<html>

<body>
    <?php
    #Joel Rojas Espinoza
    echo "ACT 5 - Cincurferencia Area y Volumen<br><br>";

    $radio = 5;
    $area = M_PI * pow($radio, 2);
    $longitud = 2 * M_PI * $radio;
    $volumen = 4 / 3 * M_PI * pow($radio, 3);

    echo "<h1>Con el Radio: " . $radio . " cm</h1><br>";
    echo "<h1>El volumen es: " . $volumen . " cm^3</h1><br>";
    echo "<h1>El area es: " . $area . " cm^2</h1><br>";
    echo "<h1>La longitud es: " . $longitud . " cm</h1>";
    ?>
</body>

</html>