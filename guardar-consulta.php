<?php

include( dirname( __FILE__ ) . '/db.php' );

if ( isset( $_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['mensaje']  ) ) {

	db_connect();
	db_execute( "INSERT INTO `consultas`( `nombre`, `correo`, `telefono`,`mensaje`) VALUES ('" . $_POST['nombre'] . "','" . $_POST['correo'] . "','" . $_POST['telefono'] . "','" . $_POST['mensaje'] . "')" );

	//die( "INSERT INTO `consultas`( `nombre`, `correo`, `telefono`,`mensaje`) VALUES ('" . $_POST['nombre'] . "','" . $_POST['correo'] . "','" . $_POST['telefono'] . "','" . $_POST['mensaje'] . "')" );

}else{
	//echo "algunas variables no estan seteadas .. o todas";
}

header( "location: index.php" );