<html>
    <head>
    	  <title>Ranking</title>
        <meta charset="UTF-8">
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/ranking.css">
        <link rel="shortcut icon" href="./images/portada.png" type="image/png" />

    </head>
    <body>
    
    <div id="p1">Los 5 jugadores con menos fallos</div>
    <div id="p2">Los 5 jugadores más rápidos</div>
                    
                    <table id="tabla1">
								<tr>
									<th>Jugador</th>
									<th>Aciertos</th>
									<th>Fallos</th>
									<th>Tiempo</th>
								</tr>
								
								<?php foreach ($jugadores as $jugador): ?>
								  <tr>
								    <td><?php echo $jugador['jugador'] ?></td>
								    <td><?php echo $jugador['aciertos'] ?></td>
								    <td><?php echo $jugador['fallos'] ?></td>
								    <td><?php echo $jugador['tiempo'] ?></td>
								  </tr>
								<?php endforeach; ?>
							</table>
							
							
							<table id="tabla2">
								<tr>
									<th>Jugador</th>
									<th>Aciertos</th>
									<th>Fallos</th>
									<th>Tiempo</th>
								</tr>
								
								<?php foreach ($jugadores2 as $jugador2): ?>
								  <tr>
								    <td><?php echo $jugador2['jugador'] ?></td>
								    <td><?php echo $jugador2['aciertos'] ?></td>
								    <td><?php echo $jugador2['fallos'] ?></td>
								    <td><?php echo $jugador2['tiempo'] ?></td>
								  </tr>
								<?php endforeach; ?>
							</table>

       
       <img src="images/image5.png" id="img1">
       <a href="index.php" ><img src="images/image6.png" id="img2" title="Inicio"></a>             
        
    </body>
</html>