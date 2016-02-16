
/*
importa este archivo a phpmyadmin para la creacion de la tabla. En la carpeta seguridad en el archivo mysql.inc.php modifica los datos de la base de datos,
usuario y contraseña para que el programa se conecte con la base de datos.
*/
CREATE TABLE IF NOT EXISTS `jugadores` (
  `jugador` varchar(20) NOT NULL,
  `aciertos` int(10) NOT NULL,
  `fallos` int(100) NOT NULL,
  `tiempo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
