<html>
<head>
	<title>Pregunta 5</title>
	<meta charset="utf-8">
	<LINK REL="stylesheet" TYPE="text/css" HREF="css/paginas.css">
</head>

<body>

<div id="div3">
	<div id="div2">
		<p><?php echo($jugador); ?></p><br>  
		<p>Aciertos: <?php echo($_SESSION['aciertos']); ?></p>
		<p>Fallos: <?php echo($_SESSION['fallos']); ?></p>
	</div>
</div>

<div id="div1">

<img src="images/05.png" id="img1">

<form name='form1' class="form1" action='pag5_controlador.php' method='get'>

	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='correcta'>Marvin</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa1'>Artie</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa2'>Cecil</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa3'>Murphy</br>
	
	<input type="submit" value="Comprobar" class="comprobar">

</form>

</div>

</body>

</html>