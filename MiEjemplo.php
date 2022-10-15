<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mi pagina en PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-10 m-auto my-5">
			<div class="card">
				<div class="card-header">
					Esto es lenguaje PHP
				</div>
				<div class="card-body">
						<h5 class="card-title">Formulario de información</h5>
						<hr>
						<form action="procesar.php" method="GET">
							<input class="form-control mb-2" type="text" name="Usuario" placeholder="Ingresa informacion"/>
							<input class="form-control mb-2" type="text" name="Clave" placeholder="Ingresar Clave"/>		
							<input class="form-control mb-2" type="text" name="Edad" placeholder="Ingresar Edad"/>
							<input class="btn btn-primary" type="submit" name="Enviar" value="Guardar"/>
						</form>
				</div>
				<div class="card-footer">
					Mi primer ejemplo PHP
					Hoy Martes.
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	setcookie("CookieDosDSwAC","maalvarezp@unl.edu.ec", time()+1);
	if(count($_COOKIE)>0)
	{
		print ("<br>No puedo almacenar cookies porque ya existe");
	}
	else{
		print ("<br>Se almacena la cookie");
	}
?>
