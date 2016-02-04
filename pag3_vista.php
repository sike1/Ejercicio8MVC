<html>
<head>
	<title>Pregunta 3</title>
	<meta charset="utf-8">
	<LINK REL="stylesheet" TYPE="text/css" HREF="css/paginas.css">
</head>

<body>

<body>

<div id="div3">
	<div id="div2">
		<p><?php echo($jugador); ?></p><br>  
		<p>Aciertos: <?php echo($_SESSION['aciertos']); ?></p>
		<p>Fallos: <?php echo($_SESSION['fallos']); ?></p>
	</div>
</div>

<div id="div1">

<img src="images/03.png" id="img1">

<form name='form1' class="form1" action='pag3_controlador.php' method='get'>

	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa1'>Poochie</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='correcta'>Pica</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa2'>Rasca</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa3'>Krusty</br>
	
	<input type="submit" value="Comprobar" class="comprobar">

</form>

</div>

</body>

</html>