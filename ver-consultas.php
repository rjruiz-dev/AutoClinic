<?php
include( dirname( __FILE__ ) . '/db.php' );

db_connect();
$array=db_read( "select * from consultas" );

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AutoClinic-Consultas</title>

	<meta name="viewport" content="width=device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body>

	<!--<table border="1">
	<tr>
		<td>Id</td><td>Nombre</td><td>Correo</td><td>Telefono</td><td>Mensaje</td>
	</tr>-->

<form action="ver-consultas.php" method="post" onsubmit="contador()" id="tabla">
<table class="table table-striped table table-hover">
<caption>Lista de Mensajes</caption>
<thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Mensaje</th>
      <!--<th scope="col">Visto</th>-->
      <th><input type="submit" name="btnEliminar" id="leidos" value="Eliminar" class="btn btn-primary"/></th>
    </tr>   	
</thead>



</body>
</html>



<script>
$(document).ready(function () {
            $("#leidos").click(function () {
                var $marcados =$("#tabla input:checked");
                if ($marcados.length > 0)
                    alert("SELECCIONADOS " +$marcados.length);
                else {
                    alert("NINGUNA SELECCION");
                }  
            });
        });
</script>

<?php

foreach ($array as $val) {
	echo "<tr><td>" . $val['id'] . "</td><td>" . $val['nombre'] . "</td><td>" . $val['correo'] . "</td><td>" . $val['telefono'] . "</td>
	<td>".$val['mensaje']."</td><td><input type='checkbox' id='checkbox' name='Ids[]' value='" . $val['id'] . "'></td>
	</tr>";	


	if( isset($_POST['btnEliminar']) ) { 
		foreach($_POST['Ids'] as $id) {
			db_connect();
			db_execute( "DELETE FROM consultas WHERE id = ".$id);
		 } 
	    header( "location: ver-consultas.php" );
	}

}

?>
</table>
</form>
