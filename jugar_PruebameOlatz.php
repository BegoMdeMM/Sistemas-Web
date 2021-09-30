<?php
	include "funciones.php";
	include "prueba.php";
	session_start();
	
	$user = $_SESSION['user'];
	$tipo = $_SESSION['tipo'];

	//$questions = getAllQuestions();
	$questions = viewAllQuestions()
?>
<!DOCTYPE html>
<html>
  <head>
	<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilosMario/register.css" media="screen" />
	<script type="text/javascript" src="scripts/scriptValores.js"></script>
	<script type="text/javascript" src="scripts/scriptValidadores.js"></script>
	<script type="text/javascript" src="scripts/scriptAñadirCampos.js"></script>
	
	<script>
		var questions = <?php echo $questions; ?>;
		/*var index = 0;
		var aciertos = 0;
		var totalPreguntas = 0;
		
		selectRandomQuestion();
		
		function selectRandomQuestion() {
			totalPreguntas++;
			index = Math.floor(Math.random() * (questions.length - 1));
			
			$("#pregunta").html("<p>" + questions[index]['Pregunta'] +"</p>");
			$("#aciertos").html("<p>Aciertos / Total Preguntas<br/>" + aciertos + "/" + totalPreguntas + "</p>");
		}
		
		function solve() {
			var respuesta = document.getElementById('respuesta').value;
			
			if (respuesta == questions[index]['Respuesta']) {
				$("#respuesta").html("<p>¡Correcto! Siguiente.</p>");				
				aciertos++;
			} else {
				$("#respuesta").html("<p>No, la respuesta era: " + questions[index]['Respuesta'] + ".</p>");								
			}
			
			selectRandomQuestion();
		}*/
	
	</script>
  </head>
  <body>
		<h5>Pruébame</h5>
		<div id="Juega">
			<div id="aciertos" name="aciertos"></div>
			<div id="pregunta" name="pregunta"></div>
			<div id="resultado" name="resultado"></div>
			<br/><br/>
			<input type="text" id="respuesta" name="respuesta"/>
			<button id="solve" name="solve" onClick="solve()">Contestar</button>
		</div>
	  
	  <div id="footer">
		<a href="index.php">Inicio</a>
	  </div>
</body>