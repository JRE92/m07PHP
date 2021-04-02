<?php
session_start();


if ($_POST['operacion?'] == 'Suma') {
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $resultado = $op1 + $op2;
    echo "<h1>El resultado de la Suma es: " . $resultado . "</h1>";;
}
if ($_POST['operacion?'] == 'Resta') {
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $resultado = $op1 - $op2;
    echo "<h1>El resultado de la Resta es: " . $resultado . "</h1>";;
}
if ($_POST['operacion?'] == 'Multiplicacion') {
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $resultado = $op1 * $op2;
    echo "<h1>El resultado de la Multiplicacion es: " . $resultado . "</h1>";;
}
if ($_POST['operacion?'] == 'Division') {
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $resultado = $op1 / $op2;
    echo "<h1>El resultado de la Division es: " . $resultado . "</h1>";;
}
	
	//session_destroy();
?>