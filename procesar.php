<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Procesar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-10 m-auto my-5">
			<div class="card">
				<div class="card-body">
						<h5 class="card-title">Lo que se recibe de MiEjemplo.php</h5>
						<hr>
						<?php
							print_r($_REQUEST); 
							print "<p>Su nombre es $_REQUEST[Usuario]</p>\n";
							print("<br>La clave ingresada es". $_REQUEST['Clave']);
							print("<h1>La Edad es ". $_REQUEST['Edad']);
							print("</h1>");
							print("<br>Fin del ejercio");
						?>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-10 m-auto my-5">
			<div class="card">
				<div class="card-body">
						<?php
							print("<h3 class='card-title'>Se imprime los Headers: </h3>");
						?>
						<hr>
						<?php
							var_dump($_SERVER);
							print("<br><br>");
							echo "<b>El servidor es:</b> {$_SERVER['SERVER_NAME']}<br>"; 
							echo "<b>El valor de USER AGENT es:</b> {$_SERVER['HTTP_USER_AGENT']}<br>"; 
							print("<br>");
							print("<br><h3>Se usa la función getallheaders: </h3><br>");
						?>
						<?php
							foreach (getallheaders() as $name => $value) {
									echo "$name: $value <br>";
							}
						?> 
						<h3>Demostrando Header Http con Lenguaje Php</h3>
						<?php
							$header = apache_request_headers();
							foreach ($header as $headers => $value) {
								echo "$headers: $value <br/>\n";
								echo"<marquee>Este texto se mueve de derecha a izquierda</marquee>";
							}
						?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>