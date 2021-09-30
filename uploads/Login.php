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
		
		$passReal = mysqli_fetch_assoc(makeQuery("SELECT Pass FROM usuario WHERE Email = '{$email}'"))['Pass'];
		
		echo $passCifrada."<br/><br/>";
		echo $passReal."<br/><br/>";
		echo strcmp($passReal, $passCifrada)."<br/><br/>";
		
		if ($passReal != null and strcmp($passReal, $passCifrada) == 0){
			$_SESSION['user'] = $email;
			//header("Location: index.php");
		} else {
			setcookie( 'passIncorrectas', $passIncorrectas + 1, time() + 300 ); //Ha fallado, cuento un intento fallido mas. El servidor llama a su anterior referencia
			//header("Location: login.html");
			echo "el usuario no existe";
			echo $passReal."<br/><br/>";
		}
	}else{
		setcookie( 'passIncorrectas', 0, time() + 300); //Ha superado el numero de intentos, guardo los intentos y le hago esperar.
		echo 'Ha superado el límite de intentos. Podrás volver a intentarlo en 5 minutos.';
	}

	
/*	if ($passIncorrectas <= 3){
		$email = $_POST['email'];
		$password = $_POST['pass'];

		$conn = connect();
		$sql = "SELECT Tipo FROM usuario WHERE Email='{$_POST['email']}' AND Pass='{$passCifrada}'";
		$result = $conn->query($sql);
		$elTipo = mysqli_fetch_assoc($result)['Tipo'];
		echo $elTipo;
		$conn->close();
		
		if ($result->num_rows > 0){

			$_SESSION['user']=$email;
			//setcookie( 'passIncorrectas', 0, time() + 300 ); //Se ha logeado correctamente
			$obj = $result->fetch_object();

			$_SESSION['tipo']=$obj->Tipo;
				//el usuario existe con esa contraseña
			$conn->close();
			//echo "el usuario si existe";
			if ($_SESSION['tipo'] == 'A'){
				header("Location: GestionPreguntas.php");
			} else{
				header("Location: modificarPreguntas.php");
			}
			
				//cambio la localizacion de este archivo== lo redirije
				//la base de datos sigue abierta
		} else {
			$conn->close();
			setcookie( 'passIncorrectas', $passIncorrectas + 1, time() + 300 ); //Ha fallado, cuento un intento fallido mas.
				//el servidor llama a su anterior referencia
			header("Location: login.html");
			//echo "el usuairo no existe";
		}
	}else{
		setcookie( 'passIncorrectas', 0, time() + 300); //Ha superado el numero de intentos, guardo los intentos y le hago esperar.
		echo 'Ha superado el límite de intentos. Podrás volver a intentarlo en 5 minutos.';
	}*/
?>