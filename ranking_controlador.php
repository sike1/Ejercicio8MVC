<?php

require_once("bd_acceso.php");

$jugadores = jugadoresMenosFallos();
$jugadores2 = jugadoresMasRapidos();

require_once("ranking_vista.php");

?>