<html>
<head>
	<title>Pregunta 1</title>
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

<img src="images/01.png" id="img1">
<img src="images/tabla_correcto.png" id="img3">

<form name='form1' class="form1" action='pag1_controlador.php' method='get'>

	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa1'>Bart</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='correcta'>Homer</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa2'>Willie</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa3'>Apu</br>
	
	<input type="submit" value="Comprobar" class="comprobar">

</form>

</div>

</body>

</html>