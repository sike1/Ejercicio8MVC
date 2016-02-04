<html>
<head>
	<title>Resultado</title>
	<meta charset="utf-8">
	<LINK REL="stylesheet" TYPE="text/css" HREF="css/resultado.css">
</head>
<body>

<div id="p1">Enhorabuena, has completado el juego</div>

<div id="div3">
	<div id="div2">
		<p>Jugador: <?php echo($jugador); ?></p><br> 
		<p>Aciertos: <?php echo($_SESSION['aciertos']); ?></p>
		<p>Fallos: <?php echo($_SESSION['fallos']); ?></p>
		<p>Tiempo: <?php echo($tiempo); ?></p>
	</div>
</div>

<a href="ranking_controlador.php" ><input type="image" src="images/image8.png" id="img2" title="Top 5"></a>
<a href="index.php" ><input type="image" src="images/image6.png" id="img3" title="Inicio"></a>



</body>

</html>