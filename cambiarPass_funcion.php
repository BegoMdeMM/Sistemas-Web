<?php
	include "funciones.php";
	session_start();
	$conn=connect();
	
	$user = $_SESSION['user'];
	$telf = $_POST["telf"];
	$nuevaPass = $_POST["password"];

	$sql = "SELECT * FROM usuario WHERE Telefono='{$telf}'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1){
		//Hacer la query
		$hash = hash("sha256", $nuevaPass, false);
		$sql="UPDATE usuario SET Pass='{$hash}' WHERE Telefono='{$telf}'";
		$result = $conn->query($sql);
		$conn->close();
		echo "Password cambiada.";
	} else{
		$conn->close();
		echo "No se pudo realizar la accion.";
	}
?>