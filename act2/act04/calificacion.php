<?php
session_start();


if ($_POST['nota'] >= 0 && $_POST['nota'] < 5 ) {
    
    echo "<h1>Suspenso nota: ".$_POST['nota']."</h1>";;
}
if ($_POST['nota'] >= 5 && $_POST['nota'] < 7 ) {
    
    echo "<h1>Aprobado nota: ".$_POST['nota']."</h1>";;
}
if ($_POST['nota'] >= 7 && $_POST['nota'] < 9 ) {
    
    echo "<h1>Notable nota: ".$_POST['nota']."</h1>";;
}
if ($_POST['nota'] >= 9 && $_POST['nota'] < 10 ) {
    
    echo "<h1>Excelente nota: ".$_POST['nota']."</h1>";;
}
if ($_POST['nota'] == 10) {
    
    echo "<h1>Matrícula de honor nota: ".$_POST['nota']."</h1>";;
}
	
	//session_destroy();
?>