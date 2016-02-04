<?php
session_start();

if($_SESSION['comprobar1'] == 2) {	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido

$jugador = $_SESSION['jugador'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];

if($_GET) {
	if($_GET['Nrespuesta'] == 'correcta') {
		$_SESSION['aciertos']++;
		unset($_SESSION['comprobar1']);
		$controlador = 2;
		$_SESSION['comprobar2'] = $controlador;	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido		 				 
		header("location:pag3_controlador.php");
	}else {
		$_SESSION['fallos']++;
	}
}

require_once("pag2_vista.php");

}else {
	header("location:index.php");
}
?>