<html><head><meta charset="utf-8"></head>

  	 <link rel="stylesheet" type="text/css" href="estilos/master.css" media="screen" />

<body>
<?php
	include("funciones.php");
	session_start();
	//Se comprueba que sea profesor.
	if (isset($_COOKIE['tipo'])){ 
		$tipo = $_COOKIE['tipo'];
		if($tipo!="P"){ //Si no es Profe, le echamos
			header("Location: index.php");
		}
	}else{
		header("Location: index.php");
	}

	// Create connection
	$conn = connect();

	//$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

	$result = mysqli_query($conn, "SELECT * FROM usuario");
	$row_cnt = $result->num_rows;
	?>

	<table border="1">
  		<caption>Datos de la base de datos</caption>
  		<tbody>
    		<tr>
		      <td>Nombre</td>
		      <th>Apellidos</th>
		      <th>Telefono</th>
		      <th>Email</th>
		      <th>Foto</th>
		      <th>Tecnologias</th>
    		</tr>
    		<tr>
				<?php
					for ($i=0;$i<$row_cnt;$i++) {
							mysqli_data_seek ($result, $i);
							$extraido= mysqli_fetch_array($result);

							$tam = 40;

							echo "<td>".$extraido['Nombre']."</td>";
							echo "<td>".$extraido['Apellidos']."</td>";
							echo "<td>".$extraido['Telefono']."</td>";
							echo "<td>".$extraido['Email']."</td>";
							echo "<td><img src=".$extraido['Foto']." width='".$tam."' height='".$tam."'></td>";
							echo "<td>".$extraido['Tecnologias']."</td>";

							echo "</tr>";
					}

					mysqli_free_result($result);
					mysqli_close($conn);
				?>
			
	  </tbody>
	</table> 

</br>
<a href="index.html">Volver al inicio</a>
</body>
</html>