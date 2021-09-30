<?php
	//incluimos la clase nusoap.php    (Utilizando NuSOAP, creo un servicio en mi server.)
	require_once('nusoap/lib/nusoap.php');
	require_once('nusoap/lib/class.wsdlcache.php');//creamos el objeto de tipo soap_server
	
	$ns="http://localhost/ProyectoSW/nusoap/samples";
	$server = new soap_server;
	$server->configureWSDL("validar",$ns);
	$server->wsdl->schemaTargetNamespace=$ns; //registramos la función que vamos a implementar
	$server->register("validar",array("x"=>"xsd:string"),array("z"=>'xsd:string'),$ns); //implementamos la función
	
	function validar ($passUsu){
		$file = fopen("toppasswords.txt", "r") or die("Unable to open file!"); 	//"libreria" de pass debiles

		while(!feof($file)) { //Output a line of the file until the end is reached
			$buffer = fgets($file);												//miramos linea a linea del fichero
			if (strcmp(substr($buffer, 0, strlen($line)-2), $passUsu) == 0) {	//-2 implica quitar salto de linea de cada linea
				fclose($file);													//si esta en el archivo,"NO" es valida
				return "NO";
			}
		}
		fclose($file);
		return "SI";//..........................................................//"SI" es apta.															
	}
	//llamamos al método service de la clase nusoap
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$server->service($HTTP_RAW_POST_DATA);
?>
