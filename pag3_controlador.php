<?php 
session_start();

if($_SESSION['comprobar2'] == 2) {	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido

$jugador = $_SESSION['jugador'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];

if($_GET) {
	if($_GET['Nrespuesta'] == 'correcta') {
		$_SESSION['aciertos']++;
		unset($_SESSION['comprobar2']);
		$controlador = 2;
		$_SESSION['comprobar3'] = $controlador;	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido		 
		header("location:pag4_controlador.php");
	}else {
		$_SESSION['fallos']++;
	}
}

	require_once("pag3_vista.php");
	
}else {
	header("location:index.php");
}
?>