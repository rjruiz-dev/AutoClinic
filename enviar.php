<?php
	$destino = "autoclinic@hotmail.com.ar";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje= $_POST["mensaje"];
	$contenido = "nombre: " . $nombre ."\ncorreo: " . $correo . "\ntelefono: " . $telefono . "\nmensaje: " . $mensaje;
	mail($destino,"contacto", $contenido);
	//header("Location:gracias.html")
	header( "location: index.php" );
?>