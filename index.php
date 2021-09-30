<?php
	include "funciones.php";
	session_start();
	
	$user = $_SESSION['user'];
	$tipo = $_SESSION['tipo'];
	
?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>JuegoQuiz</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<?php
			if (isset($user)) {
				echo '<a href="logOut.php">Logout</a>';
			} else {	
				echo '<a href="registro.html">Registrarse</a>
					  <a href="login.html">Login</a>';
			}
		?>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
		<?php
			if (isset($user)){
				echo logged($tipo);
			}else{
				echo notLogged();
			}
		?>
    <section class="main" id="s1">  
		<div>
		Aqui se visualizan las preguntas y los creditos ...
		</div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
		<a href='https://github.com/mafonso001'>Git Hub</a>
		<?php
			if (!isset($_SESSION['user'])){
				echo "<a href='logOut.php'>Log Out</a>";
			}
		?>
	</footer>
</div>
</body>
</html>
