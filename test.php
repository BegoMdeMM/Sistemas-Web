<?php
	include("funciones.php");
	session_start();
	// Create connection
	$conn = connect();
	$email="prueba003@ikasle.ehu.eus";
	
	$passCifrada = "e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca4";

	$sql = "SELECT Tipo FROM usuario WHERE Email='{$email}' AND Pass='{$passCifrada}'";
	$result = $conn->query($sql);
	$elTipo = mysqli_fetch_assoc($result)['Tipo'];
	echo $elTipo;
?>