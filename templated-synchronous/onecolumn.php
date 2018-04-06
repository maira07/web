<!DOCTYPE HTML>

<html>
	<head>
		<title>FORMULARIO</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		
	</head>
	<body>

		<div id="wrapper">
			
			<!-- Header -->
			<div id="header">
				<div class="container"> 
					
					<!-- Logo -->
					<div id="logo">
						<h1><a href="#">FORMULARIO</a></h1>
						<span>Design by MAIRA ALEJNADRA MONROY CORDOBA</span>
					</div>
					
					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.html">Homepage</a></li>
							<li><a href="threecolumn.html">Personal Profile</a></li>
							<li><a href="twocolumn1.html">Professional Profile</a></li>
							<li><a href="onecolumn.html">Form</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<?php 
			
			if ($POST) {
				//var_dump($_POST);
				$nom_ape = $_POST["Nombre y Apellido"]:
				$num = $_POST["Telefono"];
				$dire = $_POST["Direccion de correo"];
				$asun = $_POST["Asunto"];
				$cuerpo = $_POST["Cuerpo del Mensaje"];

				//var_dump($nom_ape);
				//var_dump($num);
				//var_dump($dire);
				//var_dump($asun);
				//var_dump($cuerpo);

				if ($nom_ape == "") echo "Campo Obligatorio";
				if ($num == "") echo "Campo Obligatorio";
				if ($dire == "") echo "Campo Obligatorio";
				if ($asun == "") echo "Campo Obligatorio";
				if ($cuerpo == "") echo "Campo Obligatorio";					
			}

			 ?>
			<!-- /Header -->
							<h2>FORMULARIO</h2>
							<form name="form" method="POST" action="onecolumn.php">

								<label>Nombre Y Apellido</label>
								<input type="text" name="nom_ape">

								<label>Telefono</label>
								<input type="number" name="num">

								<label>Direccion de correo</label>
								<input type="text" name="dire">

								<label>Asunto</label>
								<input type="text" name="asun">

								<label>Cuerpo del Mensaje</label>
								<textarea name="cuerpo" rows="6" cols="40"></textarea>

								<input type="submit" name="submit" value="Enviar">


			
			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>
			
		</div>
	</body>
</html>