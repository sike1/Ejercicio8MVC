<?php
session_start();

$jugador = $_SESSION['jugador'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];

$final = new DateTime($final);
$inicio = $_SESSION['tiempo_inicio'];

//$finalF = $final->format("H:i:s");
//$inicioF = $inicio->format("H:i:s"); 

$tiempo = $inicio->diff($final);

$tiempo = $tiempo->format("%H:%I:%S");

$_SESSION['tiempo_total'] = $tiempo;

$f1 = fopen("ejercicio-8.txt","a");		
fwrite($f1,"---------------------------------------------\r\n".
		"Usuario: ".$jugador."\r\n".
		"Aciertos: ".$aciertos."\r\n".
		"Fallos: ".$fallos."\r\n".
		"Duración de partida: ".$tiempo."\r\n".
		"---------------------------------------------\r\n");
fclose($f1);

require_once("bd_acceso.php");

$crearBD = crearBD();
$crearTabla = crearTabla();

require_once("resultado_vista.php");
?>