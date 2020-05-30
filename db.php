<?php

$conn=null;

function db_connect(){
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "auto_clinic");
}

function db_read( $query ){

	global $conn;
	$result=mysqli_query( $conn , $query, MYSQLI_STORE_RESULT );
	$_=array();

	while ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
		$array[]=$row;
	}
	return $array;
	//MYSQLI_BOTH;
	//MYSQLI_NUM
}

function db_execute( $query ){
	global $conn;
	mysqli_query( $conn , $query );
}

function close_connection(){
	global $conn;
	$conn=null;
}