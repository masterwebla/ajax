<?php
	
	$nombres = $_POST['nombres'];
	include('conexion.php');

	$sql_nombres = "SELECT * FROM usuarios WHERE nombres LIKE '%$nombres%'";
	$result = $conn->query($sql_nombres);
	$cantidad = $result->rowCount();

	if($nombres=="" || $nombres==null){
		echo "<tr><td>Digite un nombre</td></tr>";
	}
	else{
		if($cantidad==0)
			echo "No hay resultados";
		else{
			while($fila = $result->fetch(PDO::FETCH_ASSOC)){
				echo "<tr><td>".$fila['nombres']."</td><td>".$fila['email']."</td></tr>";
			}
		}			
	}	

?>