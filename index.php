<!DOCTYPE html>
<html>
<head>
	<title>Prueba de Encriptación</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap-reboot.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>

</head>
<body>
<h4>
	<?php
		// PRUEBA EN FRONTEND

			require('aencrp.php');
		$plano = "Hola Mundo";
		echo $plano."<br>";
		$e = encrip2($plano);
		echo "<br>".urlencode($e)."<br>";
		echo decrip2($e)."<br>";
	
	?>
</h4>
	<br>
	<div>
		<input type="text" name="texto" id="text">
		<br>
		<br>
		<button onclick="encripta1()">Encriptación Simetrica</button>
		<button onclick="encripta2()">Encriptación Asimetrica</button>
		<button onclick="encripta3()">Encriptación Híbrida</button>
		<br>
		<label>Simetrica</label>
		<div class="caja">
			<p id="encriptado1"></p>
		</div>
		<button onclick="desencriptar1()">Descencriptar</button>
		<br>
		<label>Asimetrica</label>
		<div class="caja">
			<p id="encriptado2"></p>
		</div>
		<button onclick="desencriptar2()">Descencriptar</button>
		<br>
		<label>Hibrida</label>
		<div class="caja">
			<p id="encriptado3"></p>
		</div>
		<button onclick="desencriptar3()">Descencriptar</button>
		<br>
		<br>
		<br>
		<label>Texto Desencriptado</label>
		<p id="descencriptado"></p>
	</div>
</body>
</html>