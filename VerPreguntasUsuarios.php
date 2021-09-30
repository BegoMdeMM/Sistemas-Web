<?php 
	include("funciones.php");	
	
	session_start();
	
	if (!isset($_SESSION['user']))
		header("Location: index.php");
	
	$email = $_SESSION['user'];
 
 ?>

<html>
	<head><meta charset="utf-8"></head>

  	 <link rel="stylesheet" type="text/css" href="estilos/master.css" media="screen" />

<body>
	<?php echo viewQuestions($email); ?>
	</br>
	<a href="index.php">Volver al inicio</a>
	</body>
</html>