<?php
session_start();

if($_SESSION['comprobar0'] == 2) {	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido

$jugador = $_SESSION['jugador'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];
$inicio = new DateTime($inicio);
$_SESSION['tiempo_inicio'] = $inicio;


	if($_GET) {
		if($_GET['Nrespuesta'] == 'correcta') {
			$_SESSION['aciertos']++;
			unset($_SESSION['comprobar0']);
			$controlador = 2;
			$_SESSION['comprobar1'] = $controlador;	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido
			header("location:pag2_controlador.php");
		}else {
			$_SESSION['fallos']++;
		}
	}
	
	require_once("pag1_vista.php");
	
}else {
	header("location:index.php");
}
?>