<?php 
	//PASO 1: Conectarnos a la BD
	include('conexion.php');

	//PASO 2: Consultar la tabla países
	$sql_consulta = "SELECT * FROM paises";
	$resultado = $conn->query($sql_consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario de registro</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Registro</h1>
	<form>
		Pais:
		<select name="pais" id="pais" onchange="consultarCiudades()">
			<option value="">Seleccione el pais</option>
			<?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
				<option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></option>
			<?php } ?>
		</select>
		<br>
		Ciudad:
		<select name="ciudad" id="ciudad">
			
		</select>
	</form>
	<script src="js/jquery.min.js"></script>
	<script>
		function consultarCiudades(){
			var id_pais = $('#pais').val();
			$.ajax({
				url:"consultarciudades.php",
				data:{id:id_pais},
				type:"POST",
				success:function(datos){
					console.log(datos);
					$('#ciudad').html(datos);
				}
			});
		}
	</script>
</body>
</html>