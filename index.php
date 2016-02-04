<?php 
session_start();
//Raul Comemela

$_SESSION['jugador'] = $_GET['Nusuario'];
$_SESSION['aciertos'] = 0;
$_SESSION['fallos'] = 0;
$_SESSION['tiempo_inicio'] = "";
$_SESSION['tiempo_total'] = "";


//require_once("bd.acceso.php");

//$jugadores = comprobarUsuario();

/*foreach($jugadores as $jugador => $value){
    
      //$jugador['jugador'];
		echo($value);
}*/

if($_GET) {

		if(!empty($_SESSION['jugador']) && $_SESSION['jugador'] != '') {

			if(!$jugador == $_SESSION['jugador']) {
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

