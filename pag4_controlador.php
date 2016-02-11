<?php 
session_start();

if($_SESSION['comprobar3'] == 2) {	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido

$jugador = $_SESSION['jugador'];
$aciertos = $_SESSION['aciertos'];
$fallos = $_SESSION['fallos'];

if($_POST) {
	if($_POST['Nrespuesta'] == 'correcta') {
		$_SESSION['aciertos']++;
		unset($_SESSION['comprobar3']);
		$controlador = 2;
		$_SESSION['comprobar4'] = $controlador;	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido		 
		header("location:pag5_controlador.php");
	}else {
		$_SESSION['fallos']++;
	}
}

require_once("pag4_vista.php");

}else {
	header("location:index.php");
}
?>