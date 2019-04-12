<!DOCTYPE html>
<html>
<head>
	<title>Buscador</title>
</head>
<body>
	<h1>Buscador</h1>
	<input type="text" name="nombres" id="nombres" onkeyup="buscar()">
	<table width="90%" border="2" id="encontrados">
		
	</table>
	<script src="js/jquery.min.js"></script>
	<script>
		function buscar(){
			var nombres_ingresado = $('#nombres').val();
			$.ajax({
				url:"buscarNombres.php",
				data:{nombres:nombres_ingresado},
				type:"POST",
				success:function(resultados){
					console.log(resultados);
					$('#encontrados').html(resultados);
				}
			});
		}
	</script>
</body>
</html>