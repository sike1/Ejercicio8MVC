<?php
require("seguridad/mysql.inc.php");	//Aquí incluimos los datos de la conexión (host, usuario, pass y bd)
require("bd_abstraccion.php");

function comprobarUsuario($jug){
require("seguridad/mysql.inc.php");

$conexion1 = mysql_connect ($host,$usuario,$pass) or die ("Imposible conectar"); 

    
mysql_select_db($bd,$conexion1);

   $datos="SELECT jugador FROM `jugadores` WHERE jugador='".$jug."'";

   $consulta=mysql_query($datos,$conexion1);

   $consultaf = mysql_fetch_array($consulta);

       return $consultaf;
   
}


function jugadoresMenosFallos(){
	require("seguridad/mysql.inc.php");
        // Conectar con la base de datos
  $conexion = crear_conexion($host,$usuario,$pass);
 
  // Ejecutar la consulta SQL
  $resultado = consulta_base_de_datos("SELECT * FROM jugadores ORDER BY fallos,tiempo LIMIT 5", $bd, $conexion);
 
  // Crear el array de elementos para la capa de la vista
  $jugadores = array();
  while ($fila = obtener_resultados($resultado))
  {
     $jugadores[] = $fila;
  }
 
  // Cerrar la conexión
  cerrar_conexion($conexion);
 
  return $jugadores;
}

function jugadoresMasRapidos(){
    require("seguridad/mysql.inc.php");
  // Conectar con la base de datos
  $conexion = crear_conexion($host,$usuario,$pass);
 
  // Ejecutar la consulta SQL
  $resultado = consulta_base_de_datos("SELECT * FROM jugadores ORDER BY tiempo,fallos LIMIT 5", $bd, $conexion);
 
  // Crear el array de elementos para la capa de la vista
  $jugadores = array();
  while ($fila = obtener_resultados($resultado))
  {
     $jugadores[] = $fila;
  }
 
  // Cerrar la conexión
  cerrar_conexion($conexion);
 
  return $jugadores;
}


function crearBD(){
	require("seguridad/mysql.inc.php");
  // Conectar con la base de datos
  $conexion = crear_conexion($host,$usuario,$pass);
 
  // Ejecutar la consulta SQL
  $resultado = consulta_base_de_datos("create database if not exists Ejercicio8",$bd, $conexion);
 
  return $resultado;
}


function crearTabla(){
	require("seguridad/mysql.inc.php");
  // Conectar con la base de datos
  $conexion = crear_conexion($host,$usuario,$pass);
 
  // Ejecutar la consulta SQL
  $resultado = consulta_base_de_datos("INSERT INTO `jugadores` (`jugador`, `aciertos`, `fallos`, `tiempo`) VALUES('".$_SESSION['jugador'].
	     "', '".$_SESSION['aciertos']."', '".$_SESSION['fallos']."', '".$_SESSION['tiempo_total']."')",$bd, $conexion);
 
  return $resultado;
}

?>

