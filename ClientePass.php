<?php
//incluimos la clase nusoap.php
require_once("nusoap/lib/nusoap.php");
require_once("nusoap/lib/class.wsdlcache.php");

//creamos el objeto de tipo soapclient donde se encuentra el servicio SOAP que vamos a utilizar.
$soapclient = new nusoap_client("http://localhost/ProyectoSW/recursoPass.php?wsdl",false);

//Llamamos la función que habíamos implementado en el Web Service e imprimimos lo que nos devuelve
$pass = $_GET['pass'];
echo $soapclient->call("validar", array("x"=>$pass));
?>