<html>

<body>
    <?php
    header("refresh:5; url= main.php");
    $tipo = $_POST["tipo"];
    print($tipo);
    if ($tipo == 'litle') {
        print("litle");
    }
    if ($tipo == "big") {
        print("big");
    }

    ?>
</body>

</html>