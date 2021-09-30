<?php
	include_once("funciones.php");
	session_start();

	$passIncorrectas = 0;
	
	if (isset($_COOKIE['passIncorrectas'])){
		$passIncorrectas = $_COOKIE['passIncorrectas'];
	}
	
	if ($passIncorrectas <= 3){
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$passCifrada = hash("sha256", $password, false);
		
		$query = mysqli_fetch_assoc(makeQuery("SELECT Pass, Tipo FROM usuario WHERE Email = '{$email}'"));
		$passReal = $query['Pass'];
			if ($passReal != null and strcmp($passReal, $passCifrada) == 0){
				$_SESSION['tipo'] = $query['Tipo'];
				$_SESSION['user'] = $email;
				header("Location: index.php");
			} else {
				setcookie( 'passIncorrectas', $passIncorrectas + 1, time() + 300 ); //Ha fallado, cuento un intento fallido mas. El servidor llama a su anterior referencia
				header("Location: login.html");
			}
	}else{
		setcookie( 'passIncorrectas', 0, time() + 300); //Ha superado el numero de intentos, guardo los intentos y le hago esperar.
		echo 'Ha superado el límite de intentos. Podrás volver a intentarlo en 5 minutos.';
	}

?>