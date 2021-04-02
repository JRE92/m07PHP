<?php
session_start();


if ($_POST['edad'] < 18) {
    
    echo "<h1>Hola ".$_POST['nombre'].", eres menor de edad, no puedes pasar</h1>";;
}
if ($_POST['edad'] >= 18) {
    
    echo "<h1>Hola ".$_POST['nombre'].", tienes ".$_POST['edad']." años</h1>";;
}

	
	//session_destroy();
?>