<html>
<body>
<?php
//PARKING APP
if(isset($_POST["aparcar"])){
    header("Location: formaparcar.php");
}
if(isset($_POST['retirar'])){
    header("Location: retirar.php");
}
if(isset($_POST['estado'])){
    header("Location: estado.php");
}
$litle = array();
$big = array();
?>
<h1>MAIN PAGE</h1>
<br>
APARCAR
<form action="" method="POST">
<input type="radio" name="aparcar" id="aparcar" value="aparcar">
<br>
RETIRAR
<input type="radio" name="retirar" id="retirar">
<br>
ESTADO
<input type="radio" name="estado" id="estado">
<input type="submit" value="Enviar">
</form>
</body>
</html>

