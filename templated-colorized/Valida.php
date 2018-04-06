<!DOCTYPE HTML>
<!--
	Colorized by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Formulario de contacto</title>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="description" content="poner a prueba los conocimientos aprendidos" />

		<meta name="keywords" content="ejercicios paginas web, html, php,conocimientos basicos," />

		<!-- <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'> -->

		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->

		<<!-- script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->

		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>

		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="logo-wrapper">
				<div class="container">
						
					<!-- Logo -->
						<div id="logo">
							<h1><a href="#">Formulario de contacto</a></h1>
							<span>Design by TEMPLATED</span>
						</div>
					
				</div>
			</div>	

			<div class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active1"><a href="index.html">Inicio</a></li>
							<li><a href="estudios_realizados.html">Estudios Realizados</a></li>
							<li><a href="hobbies.html">Hobbies</a></li>
							<li><a href="galeria.html">Galería</a></li>
							<li><a href="formulario.html">Contacto</a></li>
						</ul>
					</nav>
			</div>
	        
		</div>

	<!-- Header -->

		
	<!-- Banner -->
		<div id="banner">
			<div class="container"></div>
		</div>

	<!-- /Banner -->

	<!-- Main -->
		<div id="main">

			<!-- Main Content -->
			<div class="container">
				<div class="row">
					<div class="12u">
						<section>
							<header>
								<h2>Formulario</h2>
							</header>
						</section>	
							
					</div>
				</div>
			</div>		
			<form class="registro" name="form_Contact" method="POST" action="">			
			

		</div>

		<?php

		// Mensaje de error 

		function died($error) {

    	echo "Lo sentimos, hubo un error, sus datos no pueden ser enviados en este momento."; 
 							
 		}

 		// Se valida que los campos del formulairo estén llenos
 
   		if(!isset($_POST['first_name'])||
   		   !isset($_POST['last_name']) ||
           !isset($_POST['email']) || 
           !isset($_POST['telephone']) ||
       	   !isset($_POST['message'])) {
 
        died('Lo sentimos pero parece haber un problema con los datos enviados.'); 
		
		}

	    $first_name = $_POST['first_name']; // requerido
	 
	    $last_name = $_POST['last_name']; // requerido
	 
	    $email_from = $_POST['email']; // requerido
	 
	    $telephone = $_POST['telephone']; // no requerido 

	    $message = $_POST['message']; // requerido
	 
	    $error_message = "Error";


    //se valida que la direccion de correo electronico sea valida 
    
	   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	 
	  if(!preg_match($email_exp,$email_from)) {
	 
	    $error_message .= 'La dirección de correo  no es válida.<br/>';

	      }


	      	 echo "<div class='valida'><p  class='valida1' >El nombre es:".$_POST['first_name']."</p></div>";

	      	 echo "<div class='valida'><p  class='valida1'>El apellido es:".$_POST['last_name']."</p></div>";

	      	 echo "<div class='valida'><p  class='valida1'>El correo es:".$_POST['email']."</p></div>";

	      	 echo "<div class='valida'><p  class='valida1'>El  telefono es:".$_POST['telephone']."</p></div>";

	      	 echo "<div class='valida'><p  class='valida1'>El mesaje es  es:".$_POST['message']."</p></div>";
 ?>
</form>
</body>
</html>