<?php

/* iniciando la sessión del usaurio */
if( isset($_POST['username']) && isset($_POST['password']) ){
	setcookie("username",$_POST['username']);
	setcookie("color","red");
}
/* guardando la configuración del color de plantilla */
if( isset($_GET['color']))
	setcookie("color",$_GET['color']);
header("Location: main.php");

/* cerrando la sessión del usaurio */
if( isset($_GET['session']) && $_GET['session'] == "off" ){
	setcookie("username",-1);
	setcookie("color",-1);
	header("Location: index.html");
}
	
?>
