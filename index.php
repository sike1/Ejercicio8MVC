<?php 
session_start();

$_SESSION['jugador'] = $_POST['Nusuario'];
$_SESSION['aciertos'] = 0;
$_SESSION['fallos'] = 0;
$_SESSION['tiempo_inicio'] = "";
$_SESSION['tiempo_total'] = "";


require_once("bd_acceso.php");

$jugador = comprobarUsuario($_POST['Nusuario']);
if($_POST) {

		if($_POST['Nusuario'] != '') {

			if(!$jugador["jugador"] == $_POST['Nusuario']) {
				header("location: pag1_controlador.php");
				$controlador = 2;
				$_SESSION['comprobar0'] = $controlador;	//Aquí controlamos que no puede ni refrescar ni volver atrás usando lo conseguido
			
			}else {
				echo("Ese jugador ya existe, elige otro nombre");
			}
		}
}

require_once("index_vista.php");
?>

