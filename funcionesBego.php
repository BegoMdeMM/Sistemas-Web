<?php
	function connect(){

		$servername = "mysql.hostinger.es";
		$username = "u201901782_root";
		$password = "123456";
		$dbname = "u201901782_quiz";

		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}else{
			return $conn;
		}
	}

	function makeQuery($sql) {	
		$server = 'mysql.hostinger.es';
		$database = 'u201901782_quiz';
		$user = 'u201901782_root';
		$password = '123456';

		$conexion = new mysqli($server, $user, $password, $database);	
		if ($conexion->connect_error) {		
			return false;
		}
		$query = $conexion->query($sql);
		$conexion->close();
		return $query;
	}

	function insertQuestion(){

			$conn = connect();

			session_start();
			$user = $_SESSION["user"];

			if($user == ""){
				echo "usted no esta conectado";
				//echo "</br>";
				//echo "<a href="."Login.html".">Login</a>";
				$conn->close();
			}else{
				if($_POST['pregunta']=="" || $_POST['respuesta'] =="" || $_POST['comple']==""){

				echo "debe rellenar todos los campos";
				echo "</br>";
				echo "<a href='InsertarPregunta.html'>Volver</a>";

				}else{

					//Aqui la insertamos en el XML de preguntas
					$doc = new DOMDocument();
					$doc->load( 'xml/preguntas.xml', LIBXML_NOBLANKS);
					$doc->formatOutput = true;

					// Obtener la raiz de elemento "assessmentItems"
					$root = $doc->documentElement;

					// Creamos los elementos del arbol
					$assessmentItem = $doc->createElement("assessmentItem");
					$itemBody = $doc->createElement("itemBody");
					$p = $doc->createElement("p","{$_POST['pregunta']}");
					$correctResponse = $doc->createElement("correctResponse");
					$value = $doc->createElement("value","{$_POST['respuesta']}");


					// Crear y añadir un assessmentItem al nuevo elemento
					$assessmentItem->appendChild($itemBody);

					//Aqui añadimos los atributos de assessmenItem
					$assessmentItem->setAttribute('complexity', $_POST['comple']);
					$assessmentItem->setAttribute('subject', $_POST['tema']);

					$itemBody->appendChild($p);
					$assessmentItem->appendChild($correctResponse);
					$correctResponse->appendChild($value);

					//lasentamos los nodos creados en la raiz
					$root->appendChild($assessmentItem);

					//lo guardamos todo
					$doc->save('xml/preguntas.xml');

					//Aqui insertamos la pregunta en la base de datos
					$sql = "INSERT INTO preguntas (Email, Pregunta, Respuesta, Complejidad)
							VALUES ('$user','{$_POST['pregunta']}', '{$_POST['respuesta']}', '{$_POST['comple']}')";

					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
						echo "</br>";
						echo "<a href='InsertarPregunta.html'>Volver</a>";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
						$conn->close();
				}
			}
	}

	function updateQuestions(){

			$conn = connect();

			session_start();
			$user = $_SESSION["user"];

			if($user == ""){
				echo "usted no esta conectado";
				//echo "</br>";
				//echo "<a href="."Login.html".">Login</a>";
				$conn->close();
			}else{
				if($_POST['Pregunta']=="" || $_POST['Respuesta'] =="" || $_POST['Complejidad']==""){

				echo "debe rellenar todos los campos";
				echo "</br>";
				echo "<a href='modificarPreguntas.html'>Volver</a>";

				}else{

					//Aqui insertamos la pregunta en la base de datos
					$sql = "UPDATE preguntas SET Pregunta='{$_POST['Pregunta']}', Respuesta='{$_POST['Respuesta']}', Complejidad='{$_POST['Complejidad']}'
							WHERE Id='{$_POST['Id']}'";

					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
						echo "</br>";
						echo "<a href='modificarPreguntas.php'>Volver</a>";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
						$conn->close();
				}
			}
	}

	function viewAllQuestions(){
		//Configuracion de la conexion a base de datos
		$conn = connect();
		//consulta todos los empleados

		session_start();
		$user = $_SESSION["user"];
		
		
		$result = mysqli_query($conn, "SELECT * FROM preguntas ORDER BY RAND() LIMIT 1");
		/*SELECT column FROM table ORDER BY RAND() LIMIT 1*/
		
		//$result = mysqli_query($conn, "SELECT * FROM preguntas");
		$row_cnt = $result->num_rows;

		//echo "<h3>logueado como =".$user."</h3>";
		echo "<h3>Numero de preguntas =".$row_cnt."</h3>";

		//echo "<table border="."1"." width="."900px".">";
		//echo "<caption>Preguntas</caption>";
			//echo "<tbody>";
				//echo "<tr>";
				//  echo "<td>Id</td>";
				//  echo "<td>Email</td>";
				 // echo "<td>Pregunta</td>";
				 // echo "<th>Respuesta</th>";
				 // echo "<th>Complejidad</th>";
				 // echo "<th>Opciones</th>";
				//echo "</tr>";
			//echo "</tbody>";
		//echo "</table> ";

		for ($i=0;$i<$row_cnt;$i++) {
			mysqli_data_seek ($result, $i);
			return $extraido= mysqli_fetch_array($result);

			$tam = 40;
			echo "<form method=".'"POST"'."action=".'"updateQuestion.php"'.'>';
		
			echo "<table border="."1"." width="."900px".">";
				echo "<tbody>";
					echo "<tr>";
						//echo "<td><input type=".'"text"'."id=".'"Id"'."name=".'"Id"'."value='".$extraido['Id']."'/></td>"; 
						//echo "<td>".$extraido['Email']."</td>";
						//echo "<td><input type=".'"text"'."id=".'"Pregunta"'."name=".'"Pregunta"'."value='".$extraido['Pregunta']."'/></td>"; 
						//echo "<td><input type=".'"text"'."id=".'"Respuesta"'."name=".'"Respuesta"'."value='".$extraido['Respuesta']."'/></td>"; 
						//echo "<td><input type=".'"text"'."id=".'"Complejidad"'."name=".'"Complejidad"'."value='".$extraido['Complejidad']."'/></td>"; 
						//echo "<td><input type=".'"submit"'."value=".'"modificar"'."/></td>";
						echo viewPregunta($extraido);
						echo viewRespuesta($extraido);
					echo "</tr>";
				echo "</tbody>";
			echo "</table> ";

			echo "</form>";
		}

	mysqli_free_result($result);
	mysqli_close($conn);
	}
	
	function viewPregunta($extraido){echo "<td><input type=".'"text"'."id=".'"Pregunta"'."name=".'"Pregunta"'."value='".$extraido['Pregunta']."'/></td>"; }
	function viewRespuesta($extraido){echo "<td><input type=".'"text"'."id=".'"Respuesta"'."name=".'"Respuesta"'."value='".$extraido['Respuesta']."'/></td>"; }
	
	function viewQuestions(){

		//Configuracion de la conexion a base de datos
		$conn = connect();
		//consulta todos los empleados

		session_start();
		$user = $_SESSION["user"];

		$result = mysqli_query($conn, "SELECT * FROM preguntas WHERE Email='$user'");
		$row_cnt = $result->num_rows;

		echo "<h3>logueado como =".$user."</h3>";
		echo "<h3>Numero de preguntas =".$row_cnt."</h3>";

		echo "<table border="."1".">";
		echo "<caption>Preguntas</caption>";
			echo "<tbody>";
				echo "<tr>";
				  echo "<td>Enunciado</td>";
				  echo "<th>Respuesta</th>";
				echo "</tr>";

		for ($i=0;$i<$row_cnt;$i++) {
			mysqli_data_seek ($result, $i);
			$extraido= mysqli_fetch_array($result);

			$tam = 40;

			echo "<tr>";
			echo "<td>".$extraido['Pregunta']."</td>";
			echo "<td>".$extraido['Respuesta']."</td>";
			echo "</tr>";
		}

		echo "</tbody>";
	echo "</table> ";
	mysqli_free_result($result);
	mysqli_close($conn);
	}
															
	//muestra los datos consultados
	

//////////MENU/////////

	function notLogged() {							
        return "<nav class='main' id='n1' role='navigation'>
					<span><a href='index.php'>Inicio</a></span>
					<span><a href='VerPreguntasUsuarios.php'>Preguntas</a></span>	
					<span><a href='VerPreguntasXML.php'>Preguntas XML</a></span>	
					<span><a href='cambiarPass.php.html'>Recuperar Contraseña</a></span>
					<span><a href='Jugar_Pruebame.php'>¿Quieres Probarme?</a></span>
					
					<span><a href='creditos.html'>Creditos</a></span>
				</nav>";
	}
	
	function logged($tipo) {
		
		$header = "<nav class='main' id='n1' role='navigation'>
						<span><a href='index.php'>Inicio</a></span>";
		
		if ($tipo=='A'){
			$header = $header."<span><a href='VerTodasLasPreguntas.php'>Gestionar Preguntas</a></span>
								<span><a href='InsertarPregunta.html'>Nueva Pregunta</a></span>";		
		} else {
			$header = $header."<span><a href='GestionPreguntas.php'>Revisar Preguntas</a></span>
							   <span><a href='VerUsuariosConFoto.php'>Ver Usuarios Registrados</a></span>	";
		}
		
		$header = $header. "<span><a href='VerPreguntasUsuarios.php'>Preguntas</a></span>	
							<span><a href='VerPreguntasXML.php'>Preguntas XML</a></span>				
							<span><a href='creditos.html'>Créditos</a></span>						
						</nav>";
					
		return $header;
	}
	
	function showLogin(){
		
	}
	
		
	/*function getAllQuestions(){
		$conn = connect();

		//$result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM preguntas"));
		$result = mysqli_query($conn, "SELECT * FROM preguntas);
		
		$conn->close();
		
		return $result;
	}
	
	function checkAnswer($question, $givenAnswer) {
		return strcmp($question['Respuesta']) == 0;
	}*/
?>