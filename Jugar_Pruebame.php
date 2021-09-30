<?php
	include "funciones.php";
	session_start();
	
	$user = $_SESSION['user'];
	$tipo = $_SESSION['tipo'];

	$questions = getAllQuestions();
	//$questions = viewAllQuestions()
	
?>
<html>
  <head>
	<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilosMario/register.css" media="screen" />
	<script type="text/javascript" src="./jquery-1.11.3.min.js"></script>
	
	<script>
		var questions = <?php echo json_encode($questions); ?>;;
		var index = 0;
		var aciertos = 0;
		var totalPreguntas = 0;
			
		function selectRandomQuestion() {
			index = Math.floor(Math.random() * (questions.length - 1));
			
			$("#pregunta").html("<p>" + questions[index][0] +"</p>");
			$("#aciertos").html("<p>Aciertos / Total Preguntas<br/>" + aciertos + "/" + totalPreguntas + "</p>");
		}
		
		function solve() {
			totalPreguntas++;
			var respuesta = document.getElementById('respuesta').value;
			
			if (respuesta == questions[index][1]) {
				$("#resultado").html("<p>¡Correcto! Siguiente.</p>");				
				aciertos++;
			} else {
				$("#resultado").html("<p>No, la respuesta era: " + questions[index][1] + ".</p>");								
			}
			
			selectRandomQuestion();
		}
		
	</script>
  </head>
  <body onLoad="selectRandomQuestion()">
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
</html>