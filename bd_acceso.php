<?php
require_once("seguridad/mysql.inc.php");	//Aquí incluimos los datos de la conexión (host, usuario, pass y bd)
require_once("bd_abstraccion.php");


function comprobarUsuario(){		//Esta función sirve para saber si el usuario que introducimos ya existe en la BD
	
  // Conectar con la base de datos
  $conexion = crear_conexion($host,$usuario,$pass);
 
  // Ejecutar la consulta SQL
  $resultado = consulta_base_de_datos("SELECT jugador FROM jugadores WHERE jugador = '".$_SESSION['jugador']."'", $bd, $conexion);
 
  // Crear el array de elementos para la capa de la vista
  $jugadores = array();

  while ($fila = obtener_resultados($resultado)){
  	
     $jugadores[] = $fila;
     
  }
 
     // Cerrar la conexión
  cerrar_conexion($conexion);

  return $jugadores;
  
}


function jugadoresMenosFallos(){
	
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
	
  // Conectar con la base de datos
  $conexion = crear_conexion($host,$usuario,$pass);
 
  // Ejecutar la consulta SQL
  $resultado = consulta_base_de_datos("CREATE database Ejercicio8", $conexion);
 
  return $resultado;
}


function crearTabla(){
	
  // Conectar con la base de datos
  $conexion = crear_conexion($host,$usuario,$pass);
 
  // Ejecutar la consulta SQL
  $resultado = consulta_base_de_datos("INSERT INTO `jugadores` (`jugador`, `aciertos`, `fallos`, `tiempo`) VALUES('".$_SESSION['jugador'].
	     "', '".$_SESSION['aciertos']."', '".$_SESSION['fallos']."', '".$_SESSION['tiempo_total']."')", $conexion);
 
  return $resultado;
}

?>

