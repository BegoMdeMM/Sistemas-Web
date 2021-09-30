<?php
	include"funciones.php";
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos/master.css" media="screen" />
		<script>
		function temp(){
		}
		</script>
	</head>	
	<body>
		<form action="cambiarPass_funcion.php" method="post">
			<table border="1">
				<caption>Cambiar Password</caption>
				<tbody>
					<tr>
						<td><label>Introduzca su número de teléfono</label></td>
						<td><input type="text" id="telf" name="telf"></td>
					</tr>
					<tr>
						<td><label>Introduzca la nueva password</label></td>
						<td><input type="password" id="password" name="password"></td>
				  	</tr>
				</tbody>
			</table> 
			<input type="submit" id="changePass" name="changePass" value="Cambiar Contraseña"/>
		</form>
		</br>
		<div id="footer">
			<a href="index.php">Inicio</a>
		</div>
	</body>
</html>