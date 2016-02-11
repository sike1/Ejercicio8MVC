<html>
<head>
	<title>Pregunta 4</title>
	<meta charset="utf-8">
	<LINK REL="stylesheet" TYPE="text/css" HREF="css/paginas.css">
        <link rel="shortcut icon" href="./images/portada.png" type="image/png" />

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

<img src="images/04.png" id="img1">

<form name='form1' class="form1" action='pag4_controlador.php' method='post'>

	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa1'>Clancy</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa2'>Eddie</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='falsa3'>Rex</br>
	<input type='radio' name='Nrespuesta' id="respuesta" class="respuesta" value='correcta'>Lou</br>
	
	<input type="submit" value="Comprobar" class="comprobar">

</form>

</div>

</body>

</html>