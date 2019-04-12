<?php 

	//PASO 1: Recibir el dato que viene de anidado.php
	$id_pais = $_POST['id'];

	//PASO 2: Conectarnos BD
	include('conexion.php');

	//PASO 3: Consultar las ciudades del país recibido
	$sql_ciudades = "SELECT * FROM ciudades WHERE id_pais='$id_pais'";
	$res_ciudades = $conn->query($sql_ciudades);

	while($fila = $res_ciudades->fetch(PDO::FETCH_ASSOC)){
		echo "<option>".$fila['nombre']."</option>";
	}

?>