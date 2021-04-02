<html>

<body>
    <?php
    #Joel Rojas Espinoza
    echo "ACT 3 - Horas Minutos Segundos<br><br>";

    $segundosTotales = 5363;
    $horas = gmdate("H", $segundosTotales);
    $minutos = gmdate("i", $segundosTotales);
    $segundos = gmdate("s", $segundosTotales);

    echo "<h1>El numero: " . $segundosTotales . " equivale a:</h1>";
    echo "<h1>" . $horas . " Horas " . $minutos . " Minutos " . $segundos . " Segundos</h1>";

    ?>
</body>

</html>