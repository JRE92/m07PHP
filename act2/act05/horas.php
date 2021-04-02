<?php
session_start();


if ($_POST['horas'] <= 40 ) {
    $sueldo = $_POST['horas'] * 16;
    echo "<h1>".$_POST['nombre']." has trabajado ".$_POST['horas']." horas. Tu sueldo es ".$sueldo." euros</h1>";;
}
if ($_POST['horas'] > 40 ) {
    $sueldo = $_POST['horas'] * 16;
    $rest = $_POST['horas'] - 40;
    $rest2 = $_POST['horas'] - $rest;
    $sueldo1 = $rest2 * 16;
    $sueldo2 = $rest * 20;
    $sueldofinal = $sueldo1 + $sueldo2;
    echo "<h1>".$_POST['nombre']." has trabajado ".$_POST['horas']." horas. Tu sueldo es ".$sueldofinal." euros</h1>";;
}	
	//session_destroy();
?>