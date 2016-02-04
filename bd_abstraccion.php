<?php
//Esta es la parte del modelo correspondiente a la abstracción de la BD, son funciones que luego utilizaremos en 
//la parte del modelo correspondiente al acceso a la BD.

function crear_conexion($host,$usuario,$pass){
	
  return mysql_connect($host,$usuario,$pass);
}


function consulta_base_de_datos($consulta, $base_datos, $conexion){
	
  mysql_select_db($base_datos, $conexion);
 
  return mysql_query($consulta, $conexion);
}


function obtener_resultados($resultado){
	
  return mysql_fetch_array($resultado, MYSQL_ASSOC);
}


function cerrar_conexion($conexion){
	
  mysql_close($conexion);
}

?>